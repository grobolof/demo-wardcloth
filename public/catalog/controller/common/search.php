<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Search
 *
 * Can be called from $this->load->controller('common/search');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Search extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		$data['action'] = $this->url->link('common/search.redirect', 'language=' . $this->config->get('config_language'));
		$data['suggest'] = $this->url->link('common/search.suggest', 'language=' . $this->config->get('config_language'));

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}

	/**
	 * Redirect
	 */
	public function redirect(): void {
		if (isset($this->request->post['search'])) {
			$search = urlencode(html_entity_decode($this->request->post['search'], ENT_QUOTES, 'UTF-8'));
		} else {
			$search = '';
		}

		$this->response->redirect($this->url->link('product/search', 'language=' . $this->config->get('config_language') . '&search=' . $search, true));
	}

	/**
	 * Suggest
	 *
	 * @return void
	 */
	public function suggest(): void {
		$query = '';

		if (isset($this->request->get['query'])) {
			$query = trim(html_entity_decode((string)$this->request->get['query'], ENT_QUOTES, 'UTF-8'));
		}

		if (oc_strlen($query) > 64) {
			$query = oc_substr($query, 0, 64);
		}

		$json = [];

		if ($query !== '') {
			$this->load->model('catalog/search_index');

			$results = $this->model_catalog_search_index->suggest($query, 5);

			foreach ($results as $result) {
				if ($result['type'] === 'category') {
					$href = $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $result['path']);
				} else {
					$href = $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . (int)$result['item_id']);
				}

				$json[] = [
					'name' => $result['name'],
					'type' => $result['type'],
					'href' => $href
				];
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json, JSON_UNESCAPED_UNICODE));
	}
}
