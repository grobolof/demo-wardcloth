<?php
namespace Opencart\Catalog\Model\Information;
/**
 * Class Enquiry
 *
 * @package Opencart\Catalog\Model\Information
 */
class Enquiry extends \Opencart\System\Engine\Model {
	/**
	 * Add Enquiry
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return int
	 */
	public function addEnquiry(array $data): int {
		$this->ensureTable();

		$this->db->query("INSERT INTO `" . DB_PREFIX . "enquiry` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `email` = '" . $this->db->escape((string)$data['email']) . "', `enquiry` = '" . $this->db->escape((string)$data['enquiry']) . "', `date_added` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * Ensure the contact request table exists.
	 *
	 * @return void
	 */
	public function ensureTable(): void {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "enquiry` (`enquiry_id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(32) NOT NULL, `email` varchar(96) NOT NULL, `enquiry` text NOT NULL, `date_added` datetime NOT NULL, PRIMARY KEY (`enquiry_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
	}
}
