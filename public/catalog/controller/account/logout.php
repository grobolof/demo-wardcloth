<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * Class Logout
 *
 * @package Opencart\Catalog\Controller\Account
 */
class Logout extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		if ($this->customer->isLogged()) {
			$this->customer->logout();

			unset($this->session->data['order_id']);
			unset($this->session->data['customer']);
			unset($this->session->data['customer_token']);
			unset($this->session->data['shipping_address']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_address']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['comment']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
		}

		$path = (string)$this->config->get('session_path');

		setcookie('customer_token', '', [
			'expires'  => time() - 3600,
			'path'     => $path !== '' ? $path : '/',
			'secure'   => !empty($this->request->server['HTTPS']),
			'httponly' => true,
			'samesite' => (string)($this->config->get('config_session_samesite') ?: 'Lax')
		]);

		$this->response->redirect($this->url->link('common/home', 'language=' . $this->config->get('config_language'), true));
	}
}
