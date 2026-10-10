<?php
namespace Opencart\Admin\Controller\Sale;
/**
 * Class Enquiry
 *
 * @package Opencart\Admin\Controller\Sale
 */
class Enquiry extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('sale/enquiry');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('sale/enquiry', 'user_token=' . $this->session->data['user_token'])
		];

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = (int)$this->config->get('config_pagination_admin');

		if ($limit < 1) {
			$limit = 20;
		}

		$this->load->model('sale/enquiry');

		$enquiry_total = $this->model_sale_enquiry->getTotalEnquiries();

		$results = $this->model_sale_enquiry->getEnquiries([
			'start' => ($page - 1) * $limit,
			'limit' => $limit
		]);

		$data['enquiries'] = [];

		foreach ($results as $result) {
			$enquiry = trim(preg_replace('/\s+/', ' ', (string)$result['enquiry']) ?? '');

			if (oc_strlen($enquiry) > 120) {
				$enquiry = oc_substr($enquiry, 0, 120) . '...';
			}

			$data['enquiries'][] = [
				'enquiry_id' => $result['enquiry_id'],
				'name'       => $result['name'],
				'email'      => $result['email'],
				'enquiry'    => $enquiry,
				'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
				'view'       => $this->url->link('sale/enquiry.info', 'user_token=' . $this->session->data['user_token'] . '&enquiry_id=' . $result['enquiry_id'])
			];
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $enquiry_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('sale/enquiry', 'user_token=' . $this->session->data['user_token'] . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($enquiry_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($enquiry_total - $limit)) ? $enquiry_total : ((($page - 1) * $limit) + $limit), $enquiry_total, ceil($enquiry_total / $limit));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/enquiry', $data));
	}

	/**
	 * Info
	 *
	 * @return void
	 */
	public function info(): void {
		$this->load->language('sale/enquiry');

		$this->load->model('sale/enquiry');

		$enquiry_info = $this->model_sale_enquiry->getEnquiry((int)($this->request->get['enquiry_id'] ?? 0));

		if (!$enquiry_info) {
			$this->response->redirect($this->url->link('sale/enquiry', 'user_token=' . $this->session->data['user_token']));

			return;
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('sale/enquiry', 'user_token=' . $this->session->data['user_token'])
		];

		$data['back'] = $this->url->link('sale/enquiry', 'user_token=' . $this->session->data['user_token']);
		$data['name'] = $enquiry_info['name'];
		$data['email'] = $enquiry_info['email'];
		$data['enquiry'] = $enquiry_info['enquiry'];
		$data['date_added'] = date($this->language->get('datetime_format'), strtotime($enquiry_info['date_added']));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/enquiry_info', $data));
	}
}
