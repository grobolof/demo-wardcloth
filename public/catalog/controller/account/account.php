<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * Class Account
 *
 * @package Opencart\Catalog\Controller\Account
 */
class Account extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('account/account');

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'])
		];

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$firstname = $this->customer->getFirstName();
		$lastname = $this->customer->getLastName();
		$data['fullname'] = $firstname === $lastname ? $firstname : trim($lastname . ' ' . $firstname);
		$data['email'] = $this->customer->getEmail();
		$data['telephone'] = $this->customer->getTelephone();

		$this->load->model('account/wishlist');
		$this->load->model('account/order');
		$this->load->model('account/address');

		$data['wishlist_note'] = $this->quantityText($this->model_account_wishlist->getTotalWishlist($this->customer->getId()), 'Нет товаров', ['товар', 'товара', 'товаров']);
		$data['order_note'] = $this->quantityText($this->model_account_order->getTotalOrders(), 'Нет заказов', ['заказ', 'заказа', 'заказов']);
		$data['profile_note'] = $this->quantityText($this->model_account_address->getTotalAddresses($this->customer->getId()), 'Нет профилей', ['профиль', 'профиля', 'профилей']);
		$data['help'] = $this->url->link('information/contact', 'language=' . $this->config->get('config_language'));

		$data['edit'] = $this->url->link('account/edit', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['password'] = $this->url->link('account/password', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['address'] = $this->url->link('account/address', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['payment_method'] = $this->url->link('account/payment_method', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['wishlist'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['order'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

		$data['subscription'] = $this->url->link('account/subscription', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['download'] = $this->url->link('account/download', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		} else {
			$data['reward'] = '';
		}

		$data['return'] = $this->url->link('account/returns', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['transaction'] = $this->url->link('account/transaction', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['newsletter'] = $this->url->link('account/newsletter', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

		if ($this->config->get('config_affiliate_status')) {
			$data['affiliate'] = $this->url->link('account/affiliate', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

			// Affiliate
			$this->load->model('account/affiliate');

			$affiliate_info = $this->model_account_affiliate->getAffiliate($this->customer->getId());

			if ($affiliate_info) {
				$data['tracking'] = $this->url->link('account/tracking', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			} else {
				$data['tracking'] = '';
			}
		} else {
			$data['affiliate'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/account', $data));
	}

	/**
	 * @param array<int, string> $forms
	 */
	private function quantityText(int $total, string $empty, array $forms): string {
		if ($total < 1) {
			return $empty;
		}

		$mod100 = $total % 100;
		$mod10 = $total % 10;

		if ($mod100 > 10 && $mod100 < 20) {
			$word = $forms[2];
		} elseif ($mod10 === 1) {
			$word = $forms[0];
		} elseif ($mod10 > 1 && $mod10 < 5) {
			$word = $forms[1];
		} else {
			$word = $forms[2];
		}

		return $total . ' ' . $word;
	}
}
