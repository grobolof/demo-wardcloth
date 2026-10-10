<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Home
 *
 * Can be called from $this->load->controller('common/home');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Home extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$description = $this->config->get('config_description');
		$language_id = $this->config->get('config_language_id');

		if (isset($description[$language_id])) {
			$this->document->setTitle($description[$language_id]['meta_title']);
			$this->document->setDescription($description[$language_id]['meta_description']);
			$this->document->setKeywords($description[$language_id]['meta_keyword']);
		}

		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$this->load->model('catalog/manufacturer');
		$this->load->model('tool/image');

		$language = 'language=' . $this->config->get('config_language');
		$stories = [
			'ноут' => [
				'title' => 'Ноутбуки',
				'text'  => 'Лёгкие, тихие и готовые к работе целый день',
				'theme' => 'laptop'
			],
			'теле' => [
				'title' => 'Телевизоры',
				'text'  => 'Большой экран для кино, спорта и сериалов',
				'theme' => 'tv'
			],
			'смарт' => [
				'title' => 'Смартфоны',
				'text'  => 'Камера, связь и батарея, которых хватает',
				'theme' => 'phone'
			],
			'кофе' => [
				'title' => 'Кофемашины',
				'text'  => 'Эспрессо и капучино без очереди в кофейне',
				'theme' => 'coffee'
			]
		];

		$data['slides'] = [];

		foreach ($this->model_catalog_category->getCategories(0) as $category) {
			$name = mb_strtolower($category['name']);

			foreach ($stories as $needle => $story) {
				if (mb_strpos($name, $needle) !== false) {
					$data['slides'][] = $story + [
						'href' => $this->url->link('product/category', $language . '&path=' . $category['category_id'])
					];
					break;
				}
			}
		}

		$data['about'] = $this->url->link('information/information', $language . '&information_id=1');
		$data['products'] = [];
		$data['actual'] = [];
		$results = $this->model_catalog_product->getProducts([
			'sort'  => 'p.sort_order',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 16
		]);

		foreach ($results as $result) {
			if ($result['image'] && is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
				$image = $result['image'];
			} else {
				$image = 'placeholder.png';
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			$product_data = [
				'description' => '',
				'thumb'       => $this->model_tool_image->resize($image, 480, 480),
				'price'       => $price,
				'special'     => $special,
				'tax'         => false,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'href'        => $this->url->link('product/product', $language . '&product_id=' . $result['product_id'])
			] + $result;

			$card = $this->load->controller('product/thumb', $product_data);

			if (count($data['products']) < 8) {
				$data['products'][] = $card;
			} else {
				$data['actual'][] = $card;
			}
		}

		$data['brands'] = [];

		foreach ($this->model_catalog_manufacturer->getManufacturers(['sort' => 'sort_order', 'order' => 'ASC']) as $manufacturer) {
			$data['brands'][] = [
				'name' => $manufacturer['name'],
				'href' => $this->url->link('product/manufacturer.info', $language . '&manufacturer_id=' . $manufacturer['manufacturer_id'])
			];
		}

		$data['brands_href'] = $this->url->link('product/manufacturer', $language);
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
