<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Search Index
 *
 * Keeps the storefront name index in step with catalog records.
 *
 * @package Opencart\Admin\Model\Catalog
 */
class SearchIndex extends \Opencart\System\Engine\Model {
	/**
	 * Create the index table and register catalog save hooks.
	 *
	 * @return void
	 */
	public function install(): void {
		$this->ensureTable();

		$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` LIKE 'mr_search_index_%'");

		$events = [
			['mr_search_index_product_add', 'admin/model/catalog/product.addProduct/after', 'event/search_index.product'],
			['mr_search_index_product_edit', 'admin/model/catalog/product.editProduct/after', 'event/search_index.product'],
			['mr_search_index_product_delete', 'admin/model/catalog/product.deleteProduct/after', 'event/search_index.product'],
			['mr_search_index_category_add', 'admin/model/catalog/category.addCategory/after', 'event/search_index.category'],
			['mr_search_index_category_edit', 'admin/model/catalog/category.editCategory/after', 'event/search_index.category'],
			['mr_search_index_category_delete', 'admin/model/catalog/category.deleteCategory/after', 'event/search_index.category']
		];

		foreach ($events as $event) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = '" . $this->db->escape($event[0]) . "', `description` = 'Storefront search index', `trigger` = '" . $this->db->escape($event[1]) . "', `action` = '" . $this->db->escape($event[2]) . "', `status` = '1', `sort_order` = '0'");
		}
	}

	/**
	 * Replace the whole index with currently published names.
	 *
	 * @return void
	 */
	public function rebuild(): void {
		$this->ensureTable();

		$this->db->query("DELETE FROM `" . DB_PREFIX . "search_index`");

		$this->insertProducts();
		$this->insertCategories();
	}

	/**
	 * Refresh one product. A missing or unpublished product is removed.
	 *
	 * @param int $product_id primary key of the product record
	 *
	 * @return void
	 */
	public function syncProduct(int $product_id): void {
		$this->ensureTable();

		$this->db->query("DELETE FROM `" . DB_PREFIX . "search_index` WHERE `type` = 'product' AND `item_id` = '" . (int)$product_id . "'");

		$this->insertProducts($product_id);
	}

	/**
	 * Refresh every category path and name.
	 *
	 * @return void
	 */
	public function syncCategories(): void {
		$this->ensureTable();

		$this->db->query("DELETE FROM `" . DB_PREFIX . "search_index` WHERE `type` = 'category'");

		$this->insertCategories();
	}

	/**
	 * @param int|null $product_id primary key of the product record, or null for every product
	 *
	 * @return void
	 */
	private function insertProducts(?int $product_id = null): void {
		$sql = "INSERT INTO `" . DB_PREFIX . "search_index` (`store_id`, `language_id`, `type`, `item_id`, `name`, `path`) SELECT `p2s`.`store_id`, `pd`.`language_id`, 'product', `p`.`product_id`, `pd`.`name`, CAST(`p`.`product_id` AS CHAR) FROM `" . DB_PREFIX . "product` `p` INNER JOIN `" . DB_PREFIX . "product_description` `pd` ON (`pd`.`product_id` = `p`.`product_id`) INNER JOIN `" . DB_PREFIX . "product_to_store` `p2s` ON (`p2s`.`product_id` = `p`.`product_id`) WHERE `p`.`status` = '1' AND `p`.`date_available` <= NOW() AND `pd`.`name` <> ''";

		if ($product_id !== null) {
			$sql .= " AND `p`.`product_id` = '" . (int)$product_id . "'";
		}

		$this->db->query($sql);
	}

	/**
	 * @return void
	 */
	private function insertCategories(): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "search_index` (`store_id`, `language_id`, `type`, `item_id`, `name`, `path`) SELECT `c2s`.`store_id`, `cd`.`language_id`, 'category', `c`.`category_id`, `cd`.`name`, IFNULL((SELECT GROUP_CONCAT(`cp`.`path_id` ORDER BY `cp`.`level` SEPARATOR '_') FROM `" . DB_PREFIX . "category_path` `cp` WHERE `cp`.`category_id` = `c`.`category_id`), `c`.`category_id`) FROM `" . DB_PREFIX . "category` `c` INNER JOIN `" . DB_PREFIX . "category_description` `cd` ON (`cd`.`category_id` = `c`.`category_id`) INNER JOIN `" . DB_PREFIX . "category_to_store` `c2s` ON (`c2s`.`category_id` = `c`.`category_id`) WHERE `c`.`status` = '1' AND `cd`.`name` <> ''");
	}

	/**
	 * @return void
	 */
	private function ensureTable(): void {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "search_index` (`search_index_id` int(11) NOT NULL AUTO_INCREMENT, `store_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `type` varchar(16) NOT NULL, `item_id` int(11) NOT NULL, `name` varchar(255) NOT NULL, `path` varchar(255) NOT NULL, PRIMARY KEY (`search_index_id`), UNIQUE KEY `item` (`store_id`, `language_id`, `type`, `item_id`), KEY `name` (`name`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
	}
}
