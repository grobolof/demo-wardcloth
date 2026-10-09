<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * Class Order
 *
 * @package Opencart\Catalog\Controller\Account
 */
class Order extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('account/order');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$url = '';

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'] . $url)
		];

		$limit = 10;
		$language = 'language=' . $this->config->get('config_language');
		$filter_status = (string)($this->request->get['filter_status'] ?? '');
		$filter_payed = (string)($this->request->get['filter_payed'] ?? '');
		$filter_year = (string)($this->request->get['filter_year'] ?? '');

		$data['orders'] = [];
		$data['filter_status'] = $filter_status;
		$data['filter_payed'] = $filter_payed;
		$data['filter_year'] = $filter_year;

		$this->load->model('account/order');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$results = $this->model_account_order->getOrders(0, 100);
		$years = [];

		foreach ($results as $result) {
			$year = date('Y', strtotime($result['date_added']));

			if (!in_array($year, $years, true)) {
				$years[] = $year;
			}
		}

		rsort($years);

		if (!in_array(date('Y'), $years, true)) {
			array_unshift($years, date('Y'));
		}

		$data['years'] = $years;
		$filtered = [];

		foreach ($results as $result) {
			$state = $this->orderState((int)$result['order_status_id']);
			$year = date('Y', strtotime($result['date_added']));

			if ($filter_status !== '' && $state['group'] !== $filter_status) {
				continue;
			}

			if ($filter_payed === 'Y' && !$state['paid']) {
				continue;
			}

			if ($filter_payed === 'N' && ($state['paid'] || $state['canceled'])) {
				continue;
			}

			if ($filter_year !== '' && $filter_year !== $year) {
				continue;
			}

			$filtered[] = $result + ['mr_state' => $state];
		}

		$order_total = count($filtered);
		$page_results = array_slice($filtered, ($page - 1) * $limit, $limit);

		foreach ($page_results as $result) {
			$state = $result['mr_state'];
			$products = [];
			$order_products = $this->model_account_order->getProducts((int)$result['order_id']);

			foreach ($order_products as $order_product) {
				$thumb = '';
				$product_info = $this->model_catalog_product->getProduct((int)$order_product['product_id']);

				if ($product_info && !empty($product_info['image']) && is_file(DIR_IMAGE . html_entity_decode($product_info['image'], ENT_QUOTES, 'UTF-8'))) {
					$thumb = $this->model_tool_image->resize($product_info['image'], 64, 64);
				}

				$products[] = [
					'name'  => $order_product['name'],
					'thumb' => $thumb,
					'href'  => $this->url->link('product/product', $language . '&product_id=' . (int)$order_product['product_id'])
				];
			}

			$timestamp = strtotime($result['date_added']);

			$data['orders'][] = [
				'order_id'     => $result['order_id'],
				'date'         => (int)date('j', $timestamp) . ' ' . $this->monthName((int)date('n', $timestamp)) . ' ' . date('Y', $timestamp),
				'status_label' => $state['label'],
				'status_done'  => $state['group'] === 'complete',
				'step'         => $state['step'],
				'pay_text'     => $state['canceled'] ? '' : ($state['paid'] ? 'Оплачен' : 'Ожидает оплату'),
				'paid'         => $state['paid'],
				'total'        => $this->currency->format($result['total'], $result['currency_code'], $result['currency_value']),
				'products'     => array_slice($products, 0, 3),
				'more'         => max(0, count($products) - 3),
				'view'         => $this->url->link('account/order.info', $language . '&order_id=' . $result['order_id']),
				'reorder'      => $this->url->link('account/order.reorder', $language . '&order_id=' . $result['order_id']),
				'cancel'       => $this->url->link('account/order.cancel', $language . '&order_id=' . $result['order_id']),
				'can_cancel'   => $state['cancel']
			];
		}

		$filter_url = '';

		if ($filter_status !== '') {
			$filter_url .= '&filter_status=' . urlencode($filter_status);
		}

		if ($filter_payed !== '') {
			$filter_url .= '&filter_payed=' . urlencode($filter_payed);
		}

		if ($filter_year !== '') {
			$filter_url .= '&filter_year=' . urlencode($filter_year);
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $order_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('account/order', $language . $filter_url . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($order_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($order_total - $limit)) ? $order_total : ((($page - 1) * $limit) + $limit), $order_total, ceil($order_total / $limit));
		$data['action'] = $this->url->link('account/order', $language);
		$data['account'] = $this->url->link('account/account', $language);
		$data['edit'] = $this->url->link('account/edit', $language);
		$data['order'] = $data['action'];
		$data['wishlist'] = $this->url->link('account/wishlist', $language);
		$data['logout'] = $this->url->link('account/logout', $language);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/order_list', $data));
	}

	/**
	 * Info
	 *
	 * @return \Opencart\System\Engine\Action|null
	 */
	public function info(): ?\Opencart\System\Engine\Action {
		$this->load->language('account/order');

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		// Order
		$this->load->model('account/order');

		$order_info = $this->model_account_order->getOrder($order_id);

		if ($order_info) {
			$heading_title = sprintf($this->language->get('text_order'), $order_info['order_id']);

			$this->document->setTitle($heading_title);

			$url = '';

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$data['breadcrumbs'] = [];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
			];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_account'),
				'href' => $this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'])
			];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'] . $url)
			];

			$data['breadcrumbs'][] = [
				'text' => $heading_title,
				'href' => $this->url->link('account/order.info', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'] . '&order_id=' . $order_id . $url)
			];

			if ($order_info['invoice_no']) {
				$data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
			} else {
				$data['invoice_no'] = '';
			}

			$data['order_id'] = $order_id;

			// Order Status
			$this->load->model('localisation/order_status');

			$order_status_info = $this->model_localisation_order_status->getOrderStatus($order_info['order_status_id']);

			if ($order_status_info) {
				$data['order_status'] = $order_status_info['name'];
			} else {
				$data['order_status'] = '';
			}

			$data['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));

			// Payment Address
			if ($order_info['payment_address_format']) {
				$format = $order_info['payment_address_format'];
			} else {
				$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
			}

			$find = [
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{zone_code}',
				'{country}'
			];

			$replace = [
				'firstname' => $order_info['payment_firstname'],
				'lastname'  => $order_info['payment_lastname'],
				'company'   => $order_info['payment_company'],
				'address_1' => $order_info['payment_address_1'],
				'address_2' => $order_info['payment_address_2'],
				'city'      => $order_info['payment_city'],
				'postcode'  => $order_info['payment_postcode'],
				'zone'      => $order_info['payment_zone'],
				'zone_code' => $order_info['payment_zone_code'],
				'country'   => $order_info['payment_country']
			];

			$pattern_1 = [
				"\r\n",
				"\r",
				"\n"
			];

			$pattern_2 = [
				"/\\s\\s+/",
				"/\r\r+/",
				"/\n\n+/"
			];

			$data['payment_address'] = str_replace($pattern_1, '<br/>', preg_replace($pattern_2, '<br/>', trim(str_replace($find, $replace, $format))));

			if (isset($order_info['payment_method']['name'])) {
				$data['payment_method'] = $order_info['payment_method']['name'];
			} else {
				$data['payment_method'] = '';
			}

			// Shipping Address
			if ($order_info['shipping_method']) {
				if ($order_info['shipping_address_format']) {
					$format = $order_info['shipping_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}

				$find = [
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{zone_code}',
					'{country}'
				];

				$replace = [
					'firstname' => $order_info['shipping_firstname'],
					'lastname'  => $order_info['shipping_lastname'],
					'company'   => $order_info['shipping_company'],
					'address_1' => $order_info['shipping_address_1'],
					'address_2' => $order_info['shipping_address_2'],
					'city'      => $order_info['shipping_city'],
					'postcode'  => $order_info['shipping_postcode'],
					'zone'      => $order_info['shipping_zone'],
					'zone_code' => $order_info['shipping_zone_code'],
					'country'   => $order_info['shipping_country']
				];

				$data['shipping_address'] = str_replace($pattern_1, '<br/>', preg_replace($pattern_2, '<br/>', trim(str_replace($find, $replace, $format))));

				$data['shipping_method'] = $order_info['shipping_method']['name'];
			} else {
				$data['shipping_address'] = '';
				$data['shipping_method'] = '';
			}

			// Subscription
			$this->load->model('account/subscription');

			// Product
			$this->load->model('catalog/product');

			// Upload
			$this->load->model('tool/upload');

			// Products
			$data['products'] = [];

			$products = $this->model_account_order->getProducts($order_id);

			foreach ($products as $product) {
				$option_data = [];

				$options = $this->model_account_order->getOptions($order_id, $product['order_product_id']);

				foreach ($options as $option) {
					if ($option['type'] != 'file') {
						$value = $option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

						if ($upload_info) {
							$value = $upload_info['name'];
						} else {
							$value = '';
						}
					}

					$option_data[] = ['value' => (oc_strlen($value) > 20 ? oc_substr($value, 0, 20) . '..' : $value)] + $option;
				}

				$subscription_plan = '';

				$order_subscription_info = $this->model_account_order->getSubscription($order_id, $product['order_product_id']);

				if ($order_subscription_info) {
					if ($order_subscription_info['trial_status']) {
						$trial_price = $this->currency->format($order_subscription_info['trial_price'] + ($this->config->get('config_tax') ? $order_subscription_info['trial_tax'] : 0), $order_info['currency_code'], $order_info['currency_value']);
						$trial_cycle = $order_subscription_info['trial_cycle'];
						$trial_frequency = $this->language->get('text_' . $order_subscription_info['trial_frequency']);
						$trial_duration = $order_subscription_info['trial_duration'];

						$subscription_plan .= sprintf($this->language->get('text_subscription_trial'), $trial_price, $trial_cycle, $trial_frequency, $trial_duration);
					}

					$price = $this->currency->format($order_subscription_info['price'] + ($this->config->get('config_tax') ? $order_subscription_info['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']);
					$cycle = $order_subscription_info['cycle'];
					$frequency = $this->language->get('text_' . $order_subscription_info['frequency']);
					$duration = $order_subscription_info['duration'];

					if ($order_subscription_info['duration']) {
						$subscription_plan .= sprintf($this->language->get('text_subscription_duration'), $price, $cycle, $frequency, $duration);
					} else {
						$subscription_plan .= sprintf($this->language->get('text_subscription_cancel'), $price, $cycle, $frequency);
					}

					$subscription_plan_id = $order_subscription_info['subscription_plan_id'];
				} else {
					$subscription_plan_id = 0;
				}

				$subscription_info = $this->model_account_subscription->getProductByOrderProductId($order_id, $product['order_product_id']);

				if ($subscription_info) {
					$subscription = $this->url->link('account/subscription.info', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'] . '&subscription_id=' . $subscription_info['subscription_id']);
				} else {
					$subscription = '';
				}

				$data['products'][] = [
					'option'               => $option_data,
					'subscription_plan_id' => $subscription_plan_id,
					'subscription_plan'    => $subscription_plan,
					'subscription'         => $subscription,
					'price'                => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
					'total'                => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
					'view'                 => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product['product_id']),
					'return'               => $this->url->link('account/returns.add', 'language=' . $this->config->get('config_language') . '&order_id=' . $order_info['order_id'] . '&product_id=' . $product['product_id'])
				] + $product;
			}

			// Totals
			$data['totals'] = [];

			$totals = $this->model_account_order->getTotals($order_id);

			foreach ($totals as $total) {
				$data['totals'][] = ['text' => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value'])] + $total;
			}

			$data['comment'] = nl2br($order_info['comment']);

			// History
			$data['history'] = $this->getHistory();

			$data['continue'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

			$data['language'] = $this->config->get('config_language');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('account/order_info', $data));

			return null;
		} else {
			return new \Opencart\System\Engine\Action('error/not_found');
		}
	}

	/**
	 * History
	 *
	 * @return void
	 */
	public function history(): void {
		$this->load->language('account/order');

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->response->setOutput($this->getHistory());
	}

	/**
	 * Get History
	 *
	 * @return string
	 */
	protected function getHistory(): string {
		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'account/order.history') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		if (!$this->load->controller('account/login.validate')) {
			return '';
		}

		// Order
		$this->load->model('account/order');

		$order_info = $this->model_account_order->getOrder($order_id);

		if (!$order_info) {
			return '';
		}

		$data['histories'] = [];

		$results = $this->model_account_order->getHistories($order_id);

		foreach ($results as $result) {
			$data['histories'][] = [
				'comment'    => $result['notify'] ? nl2br($result['comment']) : '',
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			] + $result;
		}

		$history_total = $this->model_account_order->getTotalHistories($order_id);

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $history_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('account/order.history', 'customer_token=' . $this->session->data['customer_token'] . '&order_id=' . $order_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($history_total - $limit)) ? $history_total : ((($page - 1) * $limit) + $limit), $history_total, ceil($history_total / $limit));

		return $this->load->view('account/order_history', $data);
	}

	public function reorder(): void {
		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language'));
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$order_id = (int)($this->request->get['order_id'] ?? 0);

		$this->load->model('account/order');

		if ($this->model_account_order->getOrder($order_id)) {
			foreach ($this->model_account_order->getProducts($order_id) as $product) {
				$option_data = [];

				foreach ($this->model_account_order->getOptions($order_id, (int)$product['order_product_id']) as $option) {
					if ($option['type'] == 'checkbox') {
						$option_data[$option['product_option_id']][] = $option['product_option_value_id'];
					} elseif ($option['type'] == 'select' || $option['type'] == 'radio') {
						$option_data[$option['product_option_id']] = $option['product_option_value_id'];
					} else {
						$option_data[$option['product_option_id']] = $option['value'];
					}
				}

				$this->cart->add((int)$product['product_id'], (int)$product['quantity'], $option_data);
			}
		}

		$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));
	}

	public function cancel(): void {
		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language'));
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$order_id = (int)($this->request->get['order_id'] ?? 0);

		$this->load->model('account/order');

		$order_info = $this->model_account_order->getOrder($order_id);

		if ($order_info && $this->orderState((int)$order_info['order_status_id'])['cancel']) {
			$this->load->model('checkout/order');
			$this->model_checkout_order->addHistory($order_id, 7, 'Заказ отменен покупателем', false);
		}

		$this->response->redirect($this->url->link('account/order', 'language=' . $this->config->get('config_language')));
	}

	/**
	 * @return array{label: string, step: int, paid: bool, cancel: bool, canceled: bool, group: string}
	 */
	private function orderState(int $status_id): array {
		$states = [
			1  => ['label' => 'Принят', 'step' => 1, 'paid' => false, 'cancel' => true, 'canceled' => false, 'group' => 'accepted'],
			2  => ['label' => 'Выполняется', 'step' => 2, 'paid' => false, 'cancel' => true, 'canceled' => false, 'group' => 'processing'],
			3  => ['label' => 'Готов к выдаче', 'step' => 3, 'paid' => false, 'cancel' => true, 'canceled' => false, 'group' => 'ready'],
			5  => ['label' => 'Выполнен', 'step' => 4, 'paid' => true, 'cancel' => false, 'canceled' => false, 'group' => 'complete'],
			7  => ['label' => 'Отменен', 'step' => 0, 'paid' => false, 'cancel' => false, 'canceled' => true, 'group' => 'canceled'],
			8  => ['label' => 'Отменен', 'step' => 0, 'paid' => false, 'cancel' => false, 'canceled' => true, 'group' => 'canceled'],
			15 => ['label' => 'Выполняется', 'step' => 2, 'paid' => false, 'cancel' => true, 'canceled' => false, 'group' => 'processing'],
			16 => ['label' => 'Отменен', 'step' => 0, 'paid' => false, 'cancel' => false, 'canceled' => true, 'group' => 'canceled']
		];

		return $states[$status_id] ?? ['label' => 'Принят', 'step' => 1, 'paid' => false, 'cancel' => true, 'canceled' => false, 'group' => 'accepted'];
	}

	private function monthName(int $month): string {
		$months = [
			1  => 'января',
			2  => 'февраля',
			3  => 'марта',
			4  => 'апреля',
			5  => 'мая',
			6  => 'июня',
			7  => 'июля',
			8  => 'августа',
			9  => 'сентября',
			10 => 'октября',
			11 => 'ноября',
			12 => 'декабря'
		];

		return $months[$month] ?? '';
	}
}
