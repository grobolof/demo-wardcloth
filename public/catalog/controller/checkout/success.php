<?php
namespace Opencart\Catalog\Controller\Checkout;
/**
 * Class Success
 *
 * @package Opencart\Catalog\Controller\Checkout
 */
class Success extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$order_id = (int)($this->session->data['order_id'] ?? 0);

		if ($order_id) {
			$this->cart->clear();

			unset($this->session->data['order_id']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['comment']);
			unset($this->session->data['agree']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
		}

		$this->document->setTitle('Заказ оформлен');

		$language = 'language=' . $this->config->get('config_language');
		$logged = $this->customer->isLogged();

		$data['order_id'] = $order_id;
		$data['logged'] = $logged;
		$data['orders'] = $this->url->link('account/order', $language . ($logged ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['continue'] = $this->url->link('common/home', $language);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}
