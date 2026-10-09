<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * Class Edit
 *
 * @package Opencart\Catalog\Controller\Account
 */
class Edit extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('account/edit');

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/edit', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->document->setTitle('Персональные данные');

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => 'Личный кабинет',
			'href' => $this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => 'Персональные данные',
			'href' => $this->url->link('account/edit', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'])
		];

		$data['error_upload_size'] = sprintf($this->language->get('error_upload_size'), $this->config->get('config_file_max_size'));

		$data['config_file_max_size'] = ((int)$this->config->get('config_file_max_size') * 1024 * 1024);
		$data['config_telephone_display'] = $this->config->get('config_telephone_display');
		$data['config_telephone_required'] = $this->config->get('config_telephone_required');

		$data['save'] = $this->url->link('account/edit.save', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

		$this->session->data['upload_token'] = oc_token(32);

		$data['upload'] = $this->url->link('tool/upload', 'language=' . $this->config->get('config_language') . '&upload_token=' . $this->session->data['upload_token']);

		// Customer
		$this->load->model('account/customer');

		$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

		$data['firstname'] = $customer_info['firstname'];
		$data['lastname'] = $customer_info['lastname'];
		$data['fullname'] = $customer_info['firstname'] === $customer_info['lastname'] ? $customer_info['firstname'] : trim($customer_info['lastname'] . ' ' . $customer_info['firstname']);
		$data['email'] = $customer_info['email'];
		$data['telephone'] = $customer_info['telephone'];

		// Custom Fields
		$data['custom_fields'] = [];

		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($this->customer->getGroupId());

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'account') {
				$data['custom_fields'][] = $custom_field;
			}
		}

		$data['account_custom_field'] = $customer_info['custom_field'];

		$language = 'language=' . $this->config->get('config_language');
		$token = '&customer_token=' . $this->session->data['customer_token'];

		$data['back'] = $this->url->link('account/account', $language . $token);
		$data['edit'] = $this->url->link('account/edit', $language . $token);
		$data['account'] = $data['back'];
		$data['order'] = $this->url->link('account/order', $language . $token);
		$data['wishlist'] = $this->url->link('account/wishlist', $language . $token);
		$data['logout'] = $this->url->link('account/logout', $language);
		$data['password_save'] = $this->url->link('account/password.save', $language . $token);
		$data['privacy'] = $this->url->link('information/information', $language . '&information_id=3');
		$data['offer'] = $this->url->link('information/information', $language . '&information_id=2');

		$data['language'] = $this->config->get('config_language');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/edit', $data));
	}

	/**
	 * Save
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('account/edit');

		$json = [];

		$required = [
			'firstname' => '',
			'lastname'  => '',
			'email'     => '',
			'telephone' => ''
		];

		$post_info = $this->request->post + $required;

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/edit', 'language=' . $this->config->get('config_language'));

			$json['redirect'] = $this->url->link('account/login', 'language=' . $this->config->get('config_language'), true);
		}

		if (!$json) {
			$fullname = '';

			if (array_key_exists('fullname', $this->request->post)) {
				$fullname = trim(preg_replace('/\s+/u', ' ', (string)$post_info['fullname']));
				$parts = $fullname === '' ? [] : explode(' ', $fullname, 2);
				$post_info['lastname'] = $parts[0] ?? '';
				$post_info['firstname'] = isset($parts[1]) && $parts[1] !== '' ? $parts[1] : ($parts[0] ?? '');
			}

			if (array_key_exists('fullname', $this->request->post)) {
				if ($fullname === '' || !oc_validate_length($post_info['firstname'], 1, 32) || !oc_validate_length($post_info['lastname'], 1, 32)) {
					$json['error']['fullname'] = $this->language->get('error_fullname');
				}
			} else {
				if (!oc_validate_length($post_info['firstname'], 1, 32)) {
					$json['error']['firstname'] = $this->language->get('error_firstname');
				}

				if (!oc_validate_length($post_info['lastname'], 1, 32)) {
					$json['error']['lastname'] = $this->language->get('error_lastname');
				}
			}

			if (!oc_validate_email($post_info['email']) || !preg_match('/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?(?:\.[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?)+$/', $post_info['email'])) {
				$json['error']['email'] = $this->language->get('error_email');
			}

			// Customer
			$this->load->model('account/customer');

			if (($this->customer->getEmail() != $post_info['email']) && $this->model_account_customer->getTotalCustomersByEmail($post_info['email'])) {
				$json['error']['email'] = $this->language->get('error_exists');
			}

			$telephone = trim((string)$post_info['telephone']);
			$digits = preg_replace('/\D+/', '', $telephone) ?? '';

			if ($digits !== '' && ($digits[0] === '8' || $digits[0] === '7')) {
				$digits = substr($digits, 1);
			}

			if (!preg_match('/^\d{10}$/', $digits)) {
				$json['error']['telephone'] = $this->language->get('error_telephone');
			} else {
				$post_info['telephone'] = '+7 (' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6, 2) . '-' . substr($digits, 8, 2);
			}

			// Custom fields validation
			$this->load->model('account/custom_field');

			$custom_fields = $this->model_account_custom_field->getCustomFields($this->customer->getGroupId());

			foreach ($custom_fields as $custom_field) {
				if ($custom_field['location'] == 'account') {
					if ($custom_field['required'] && empty($post_info['custom_field'][$custom_field['custom_field_id']])) {
						$json['error']['custom_field_' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
					} elseif ($custom_field['type'] == 'text' && !empty($custom_field['validation']) && !oc_validate_regex($post_info['custom_field'][$custom_field['custom_field_id']], $custom_field['validation'])) {
						$json['error']['custom_field_' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_regex'), $custom_field['name']);
					}
				}
			}
		}

		if (!$json) {
			if (!array_key_exists('custom_field', $this->request->post)) {
				$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
				$post_info['custom_field'] = $customer_info['custom_field'] ?? [];
			}

			// Update customer in db
			$this->model_account_customer->editCustomer($this->customer->getId(), $post_info);

			$json['success'] = $this->language->get('text_success');

			// Update customer session details
			$this->session->data['customer'] = [
				'customer_id'       => $this->customer->getId(),
				'customer_group_id' => $this->customer->getGroupId(),
				'firstname'         => $post_info['firstname'],
				'lastname'          => $post_info['lastname'],
				'email'             => $post_info['email'],
				'telephone'         => $post_info['telephone'],
				'custom_field'      => $post_info['custom_field'] ?? []
			];

			unset($this->session->data['order_id']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
