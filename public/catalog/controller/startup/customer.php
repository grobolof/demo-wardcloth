<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class Customer
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class Customer extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->registry->set('customer', new \Opencart\System\Library\Cart\Customer($this->registry));

		// Customer Group
		if (isset($this->session->data['customer'])) {
			$this->config->set('config_customer_group_id', $this->session->data['customer']['customer_group_id']);
		} elseif ($this->customer->isLogged()) {
			// Logged in customers
			$this->config->set('config_customer_group_id', $this->customer->getGroupId());
		}

		$this->syncCustomerToken();
	}

	/**
	 * Keep the account token in an HttpOnly cookie and satisfy the existing
	 * customer_token checks without putting the value in the URL.
	 */
	private function syncCustomerToken(): void {
		$token = isset($this->session->data['customer_token']) ? (string)$this->session->data['customer_token'] : '';
		$path = (string)$this->config->get('session_path');
		$option = [
			'expires'  => $token !== '' ? time() + (int)$this->config->get('config_session_expire') : time() - 3600,
			'path'     => $path !== '' ? $path : '/',
			'secure'   => !empty($this->request->server['HTTPS']),
			'httponly' => true,
			'samesite' => (string)($this->config->get('config_session_samesite') ?: 'Lax')
		];

		if ($token !== '') {
			$cookie = isset($this->request->cookie['customer_token']) ? (string)$this->request->cookie['customer_token'] : '';

			if (!hash_equals($token, $cookie)) {
				setcookie('customer_token', $token, $option);
			}

			if (empty($this->request->get['customer_token'])) {
				$this->request->get['customer_token'] = $token;
			}
		} elseif (!empty($this->request->cookie['customer_token'])) {
			setcookie('customer_token', '', $option);
		}
	}
}
