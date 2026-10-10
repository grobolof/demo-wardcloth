<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Class Category
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Category extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return \Opencart\System\Engine\Action|null
	 */
	public function index(): ?\Opencart\System\Engine\Action {
		$this->load->language('product/category');

		if (isset($this->request->get['path'])) {
			$path = (string)$this->request->get['path'];
		} else {
			$path = '';
		}

		if (isset($this->request->get['filter'])) {
			$filter = $this->request->get['filter'];
		} else {
			$filter = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit']) && (int)$this->request->get['limit']) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('config_pagination');
		}

		if (isset($this->request->get['manufacturer_id'])) {
			$manufacturer_id = (int)$this->request->get['manufacturer_id'];
		} else {
			$manufacturer_id = 0;
		}

		// Category
		$parts = explode('_', $path);

		$category_id = (int)array_pop($parts);

		$this->load->model('catalog/category');

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			$this->document->setTitle($category_info['meta_title']);
			$this->document->setDescription($category_info['meta_description']);
			$this->document->setKeywords($category_info['meta_keyword']);

			$data['breadcrumbs'] = [];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
			];

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$path = '';

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = (int)$path_id;
				} else {
					$path .= '_' . (int)$path_id;
				}

				$parent_info = $this->model_catalog_category->getCategory((int)$path_id);

				if ($parent_info) {
					$data['breadcrumbs'][] = [
						'text' => $parent_info['name'],
						'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $path . $url)
					];
				}
			}

			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			if ($manufacturer_id) {
				$url .= '&manufacturer_id=' . $manufacturer_id;
			}

			// Set the last category breadcrumb
			$data['breadcrumbs'][] = [
				'text' => $category_info['name'],
				'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . $url)
			];

			$data['heading_title'] = $category_info['name'];

			$data['text_compare'] = sprintf($this->language->get('text_compare'), isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0);

			// Image
			$this->load->model('tool/image');

			if (!empty($category_info['image']) && is_file(DIR_IMAGE . html_entity_decode($category_info['image'], ENT_QUOTES, 'UTF-8'))) {
				$data['image'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('config_image_category_width'), $this->config->get('config_image_category_height'));
			} else {
				$data['image'] = '';
			}

			$data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
			$data['compare'] = $this->url->link('product/compare', 'language=' . $this->config->get('config_language'));
			$data['brands'] = [];

			$brand_query = $this->db->query("SELECT DISTINCT `m`.`manufacturer_id`, `m`.`name` FROM `" . DB_PREFIX . "manufacturer` `m` INNER JOIN `" . DB_PREFIX . "product` `p` ON (`p`.`manufacturer_id` = `m`.`manufacturer_id`) INNER JOIN `" . DB_PREFIX . "product_to_category` `p2c` ON (`p2c`.`product_id` = `p`.`product_id`) INNER JOIN `" . DB_PREFIX . "product_to_store` `p2s` ON (`p2s`.`product_id` = `p`.`product_id` AND `p2s`.`store_id` = '" . (int)$this->config->get('config_store_id') . "') WHERE `p2c`.`category_id` = '" . (int)$category_id . "' AND `p`.`status` = '1' AND `p`.`manufacturer_id` > 0");

			$brand_rows = $brand_query->rows;
			$description_plain = trim(strip_tags($data['description']));

			usort($brand_rows, function (array $left, array $right) use ($description_plain): int {
				$left_pos = mb_stripos($description_plain, $left['name']);
				$right_pos = mb_stripos($description_plain, $right['name']);

				return ($left_pos === false ? PHP_INT_MAX : $left_pos) <=> ($right_pos === false ? PHP_INT_MAX : $right_pos);
			});

			$brand_path = isset($this->request->get['path']) ? (string)$this->request->get['path'] : (string)$category_id;

			foreach ($brand_rows as $brand_row) {
				$brand_id = (int)$brand_row['manufacturer_id'];
				$brand_query_string = 'language=' . $this->config->get('config_language') . '&path=' . $brand_path;

				if ($manufacturer_id !== $brand_id) {
					$brand_query_string .= '&manufacturer_id=' . $brand_id;
				}

				$data['brands'][] = [
					'name'   => $brand_row['name'],
					'active' => $manufacturer_id === $brand_id,
					'href'   => $this->url->link('product/category', $brand_query_string)
				];
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['categories'] = [];

			// Product
			$this->load->model('catalog/product');

			$results = $this->model_catalog_category->getCategories($category_id);

			foreach ($results as $result) {
				$filter_data = [
					'filter_category_id'  => $result['category_id'],
					'filter_sub_category' => false
				];

				$data['categories'][] = [
					'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
				];
			}

			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			// Product
			$data['products'] = [];

			$filter_data = [
				'filter_category_id'  => $category_id,
				'filter_sub_category' => false,
				'filter_filter'       => $filter,
				'sort'                => $sort,
				'order'               => $order,
				'start'               => ($page - 1) * $limit,
				'limit'               => $limit
			];

			if ($manufacturer_id) {
				$filter_data['filter_manufacturer_id'] = $manufacturer_id;
			}

			$results = $this->model_catalog_product->getProducts($filter_data);

			foreach ($results as $result) {
				$description = trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')));

				if (oc_strlen($description) > $this->config->get('config_product_description_length')) {
					$description = oc_substr($description, 0, $this->config->get('config_product_description_length')) . '..';
				}

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

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				$product_data = [
					'description' => $description,
					'thumb'       => $this->model_tool_image->resize($image, $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height')),
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'] . $url)
				] + $result;

				$data['products'][] = $this->load->controller('product/thumb', $product_data);
			}

			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			if ($manufacturer_id) {
				$url .= '&manufacturer_id=' . $manufacturer_id;
			}

			$data['sorts'] = [];

			$data['sorts'][] = [
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&sort=p.sort_order&order=ASC' . $url)
			];

			$data['sorts'][] = [
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&sort=pd.name&order=ASC' . $url)
			];

			$data['sorts'][] = [
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&sort=pd.name&order=DESC' . $url)
			];

			$data['sorts'][] = [
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&sort=p.price&order=ASC' . $url)
			];

			$data['sorts'][] = [
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&sort=p.price&order=DESC' . $url)
			];

			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if ($manufacturer_id) {
				$url .= '&manufacturer_id=' . $manufacturer_id;
			}

			$data['limits'] = [];

			$limits = array_unique([$this->config->get('config_pagination'), 25, 50, 75, 100]);

			sort($limits);

			foreach ($limits as $value) {
				$data['limits'][] = [
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . $url . '&limit=' . $value)
				];
			}

			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			if ($manufacturer_id) {
				$url .= '&manufacturer_id=' . $manufacturer_id;
			}

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$data['pagination'] = $this->load->controller('common/pagination', [
				'total' => $product_total,
				'page'  => $page,
				'limit' => $limit,
				'url'   => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . $url . '&page={page}')
			]);

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			// https://developers.google.com/search/blog/2011/09/pagination-with-relnext-and-relprev
			if ($page == 1) {
				$this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path']), 'canonical');
			} else {
				$this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&page=' . $page), 'canonical');
			}

			if ($page > 1) {
				$this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
			}

			if ($limit && ceil($product_total / $limit) > $page) {
				$this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&page=' . ($page + 1)), 'next');
			}

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/category', $data));
		} else {
			return new \Opencart\System\Engine\Action('error/not_found');
		}

		return null;
	}
}
