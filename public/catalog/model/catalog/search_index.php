<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * Class Search Index
 *
 * Can be called from $this->load->model('catalog/search_index');
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class SearchIndex extends \Opencart\System\Engine\Model {
	/**
	 * Suggest published product and category names.
	 *
	 * @param string $query name fragment
	 * @param int    $limit maximum number of rows
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function suggest(string $query, int $limit = 5): array {
		$this->ensureTable();

		$like = $this->like($query);
		$limit = max(1, $limit);

		$sql = "SELECT `type`, `item_id`, `name`, `path` FROM `" . DB_PREFIX . "search_index` WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `name` LIKE '%" . $like . "%' ORDER BY (CASE WHEN `name` LIKE '" . $like . "%' THEN 0 ELSE 1 END), (CASE WHEN `type` = 'category' THEN 0 ELSE 1 END), CHAR_LENGTH(`name`), `name` LIMIT " . (int)$limit;

		return $this->db->query($sql)->rows;
	}

	/**
	 * @param string $query name fragment
	 *
	 * @return string
	 */
	private function like(string $query): string {
		return $this->db->escape(str_replace(['\\', '%', '_'], ['\\\\', '\\%', '\\_'], $query));
	}

	/**
	 * @return void
	 */
	private function ensureTable(): void {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "search_index` (`search_index_id` int(11) NOT NULL AUTO_INCREMENT, `store_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `type` varchar(16) NOT NULL, `item_id` int(11) NOT NULL, `name` varchar(255) NOT NULL, `path` varchar(255) NOT NULL, PRIMARY KEY (`search_index_id`), UNIQUE KEY `item` (`store_id`, `language_id`, `type`, `item_id`), KEY `name` (`name`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
	}
}
