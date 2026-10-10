<?php
namespace Opencart\Admin\Controller\Event;
/**
 * Class Search Index
 *
 * @package Opencart\Admin\Controller\Event
 */
class SearchIndex extends \Opencart\System\Engine\Controller {
	/**
	 * Product
	 *
	 * admin/model/catalog/product.addProduct/after
	 * admin/model/catalog/product.editProduct/after
	 * admin/model/catalog/product.deleteProduct/after
	 *
	 * @param string            $route
	 * @param array<int, mixed> $args
	 * @param mixed             $output
	 *
	 * @return void
	 */
	public function product(string &$route, array &$args, &$output): void {
		$product_id = str_contains($route, 'addProduct') ? (int)$output : (int)($args[0] ?? 0);

		if (!$product_id) {
			return;
		}

		$this->load->model('catalog/search_index');

		$this->model_catalog_search_index->syncProduct($product_id);
	}

	/**
	 * Category
	 *
	 * admin/model/catalog/category.addCategory/after
	 * admin/model/catalog/category.editCategory/after
	 * admin/model/catalog/category.deleteCategory/after
	 *
	 * @param string            $route
	 * @param array<int, mixed> $args
	 * @param mixed             $output
	 *
	 * @return void
	 */
	public function category(string &$route, array &$args, &$output): void {
		$this->load->model('catalog/search_index');

		$this->model_catalog_search_index->syncCategories();
	}
}
