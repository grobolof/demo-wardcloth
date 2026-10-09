<?php
namespace Opencart\Catalog\Controller\Checkout;
/**
 * Class Checkout
 *
 * @package Opencart\Catalog\Controller\Checkout
 */
class Checkout extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		// Validate cart to see if it has products and has stock.
		if (!$this->cart->hasProducts() || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout')) || !$this->cart->hasMinimum()) {
			$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true));
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$language = 'language=' . $this->config->get('config_language');

		if ($this->customer->isLogged()) {
			$this->prepare();
			$this->load->controller('checkout/confirm');
		}

		$data['cart'] = $this->url->link('checkout/cart', $language);
		$data['edit'] = $this->url->link('account/edit', $language);
		$data['logged'] = $this->customer->isLogged();
		$data['language'] = $this->config->get('config_language');
		$data['privacy'] = $this->url->link('information/information', $language . '&information_id=3');
		$data['offer'] = $this->url->link('information/information', $language . '&information_id=2');
		$data['comment'] = (string)($this->session->data['comment'] ?? '');
		$data['store_address'] = '108811, г. Москва, вн.тер.г. муниципальный округ Солнцево, кв-л 32, д. 17А стр. 1';

		if ($this->customer->isLogged()) {
			$firstname = (string)$this->customer->getFirstName();
			$lastname = (string)$this->customer->getLastName();
			$data['fullname'] = $firstname === $lastname ? $firstname : trim($lastname . ' ' . $firstname);
			$data['email'] = $this->customer->getEmail();
			$data['telephone'] = $this->customer->getTelephone();
		} else {
			$data['fullname'] = '';
			$data['email'] = '';
			$data['telephone'] = '';
		}

		$totals = [];
		$taxes = $this->cart->getTaxes();
		$total = 0;

		$this->load->model('checkout/cart');
		($this->model_checkout_cart->getTotals)($totals, $taxes, $total);

		$currency = $this->session->data['currency'];
		$data['total'] = $this->currency->format($total, $currency);
		$data['subtotal'] = $data['total'];
		$data['shipping_cost'] = $this->currency->format(0, $currency);
		$data['savings'] = '';

		foreach ($totals as $row) {
			if ($row['code'] === 'sub_total') {
				$data['subtotal'] = $this->currency->format($row['value'], $currency);
			}

			if ($row['code'] === 'shipping') {
				$data['shipping_cost'] = $this->currency->format($row['value'], $currency);
			}
		}

		$subtotal_value = 0;

		foreach ($totals as $row) {
			if ($row['code'] === 'sub_total') {
				$subtotal_value = (float)$row['value'];
			}
		}

		if ($subtotal_value > $total) {
			$data['savings'] = $this->currency->format($subtotal_value - $total, $currency);
		}

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}

	public function prepare(): void {
		if ($this->customer->isLogged() && !isset($this->session->data['customer'])) {
			$this->session->data['customer'] = [
				'customer_id'       => $this->customer->getId(),
				'customer_group_id' => $this->customer->getGroupId(),
				'firstname'         => $this->customer->getFirstName(),
				'lastname'          => $this->customer->getLastName(),
				'email'             => $this->customer->getEmail(),
				'telephone'         => $this->customer->getTelephone(),
				'custom_field'      => []
			];
		}

		if (!isset($this->session->data['customer'])) {
			return;
		}

		$address = $this->pickupAddress($this->session->data['customer']);
		$this->session->data['shipping_address'] = $address;

		if ($this->config->get('config_checkout_payment_address')) {
			$this->session->data['payment_address'] = $address;
		}

		$this->load->model('checkout/shipping_method');

		$shipping = [];

		if ($this->cart->hasShipping()) {
			$shipping = $this->model_checkout_shipping_method->getMethods($address);
		}

		if (!isset($shipping['pickup']['quote']['pickup'])) {
			$shipping = [
				'pickup' => [
					'code'       => 'pickup',
					'name'       => 'Самовывоз',
					'quote'      => [
						'pickup' => [
							'code'         => 'pickup.pickup',
							'name'         => 'Самовывоз',
							'cost'         => 0.0,
							'tax_class_id' => 0,
							'text'         => $this->currency->format(0, $this->session->data['currency'])
						]
					],
					'sort_order' => 1,
					'error'      => false
				]
			];
		} else {
			$shipping = ['pickup' => $shipping['pickup']];
			$shipping['pickup']['quote']['pickup']['name'] = 'Самовывоз';
		}

		$this->session->data['shipping_methods'] = $shipping;
		$this->session->data['shipping_method'] = $shipping['pickup']['quote']['pickup'];

		$this->load->model('checkout/payment_method');

		$payments = $this->model_checkout_payment_method->getMethods($this->session->data['payment_address'] ?? []);

		if (!isset($payments['cod']['option']['cod'])) {
			$payments = [
				'cod' => [
					'code'       => 'cod',
					'name'       => 'Наличными',
					'option'     => [
						'cod' => [
							'code' => 'cod.cod',
							'name' => 'Наличными'
						]
					],
					'sort_order' => 1
				]
			];
		} else {
			$payments = ['cod' => $payments['cod']];
			$payments['cod']['option']['cod']['name'] = 'Наличными';
			$payments['cod']['name'] = 'Наличными';
		}

		$this->session->data['payment_methods'] = $payments;
		$this->session->data['payment_method'] = $payments['cod']['option']['cod'];
	}

	public function guest(): void {
		$json = [];

		if (!$this->cart->hasProducts() || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout')) || !$this->cart->hasMinimum()) {
			$json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true);
		}

		$fullname = trim(preg_replace('/\s+/u', ' ', (string)($this->request->post['fullname'] ?? '')) ?? '');
		$email = trim((string)($this->request->post['email'] ?? ''));
		$telephone = trim((string)($this->request->post['telephone'] ?? ''));
		$digits = preg_replace('/\D+/', '', $telephone) ?? '';

		if ($digits !== '' && ($digits[0] === '8' || $digits[0] === '7')) {
			$digits = substr($digits, 1);
		}

		if (!$json) {
			$parts = $fullname === '' ? [] : explode(' ', $fullname, 2);
			$lastname = $parts[0] ?? '';
			$firstname = $parts[1] ?? ($parts[0] ?? '');

			if ($fullname === '' || !oc_validate_length($firstname, 1, 32) || !oc_validate_length($lastname, 1, 32)) {
				$json['error']['fullname'] = 'Укажите фамилию и имя';
			}

			if (!oc_validate_email($email)) {
				$json['error']['email'] = 'Укажите корректный e-mail';
			}

			if (!preg_match('/^\d{10}$/', $digits)) {
				$json['error']['telephone'] = 'Укажите телефон в формате +7 (999) 999-99-99';
			}
		}

		if (!$json) {
			$this->session->data['customer'] = [
				'customer_id'       => 0,
				'customer_group_id' => (int)$this->config->get('config_customer_group_id'),
				'firstname'         => $firstname,
				'lastname'          => $lastname,
				'email'             => $email,
				'telephone'         => '+7 (' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6, 2) . '-' . substr($digits, 8, 2),
				'custom_field'      => []
			];
			$this->session->data['comment'] = (string)($this->request->post['comment'] ?? '');
			$this->prepare();
			$this->load->controller('checkout/confirm');
			$json['success'] = true;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * @param array<string, mixed> $customer
	 *
	 * @return array<string, mixed>
	 */
	private function pickupAddress(array $customer): array {
		$this->load->model('localisation/country');
		$this->load->model('localisation/zone');

		$country_id = (int)$this->config->get('config_country_id');
		$zone_id = (int)$this->config->get('config_zone_id');
		$country = $this->model_localisation_country->getCountry($country_id);
		$zone = $this->model_localisation_zone->getZone($zone_id);

		return [
			'address_id'     => 0,
			'firstname'      => (string)($customer['firstname'] ?? ''),
			'lastname'       => (string)($customer['lastname'] ?? ''),
			'company'        => '',
			'address_1'      => 'кв-л 32, д. 17А стр. 1',
			'address_2'      => '',
			'city'           => 'Москва',
			'postcode'       => '108811',
			'zone_id'        => $zone_id,
			'zone'           => $zone['name'] ?? '',
			'zone_code'      => $zone['code'] ?? '',
			'country_id'     => $country_id,
			'country'        => $country['name'] ?? '',
			'iso_code_2'     => $country['iso_code_2'] ?? '',
			'iso_code_3'     => $country['iso_code_3'] ?? '',
			'address_format' => '',
			'custom_field'   => []
		];
	}
}
