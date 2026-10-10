<?php
namespace Opencart\Admin\Model\Sale;
/**
 * Class Enquiry
 *
 * @package Opencart\Admin\Model\Sale
 */
class Enquiry extends \Opencart\System\Engine\Model {
	/**
	 * Get Enquiry
	 *
	 * @param int $enquiry_id
	 *
	 * @return array<string, mixed>
	 */
	public function getEnquiry(int $enquiry_id): array {
		$this->ensureTable();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "enquiry` WHERE `enquiry_id` = '" . (int)$enquiry_id . "'");

		return $query->row;
	}

	/**
	 * Get Enquiries
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getEnquiries(array $data = []): array {
		$this->ensureTable();

		$sql = "SELECT * FROM `" . DB_PREFIX . "enquiry` ORDER BY `date_added` DESC";

		if (isset($data['start']) || isset($data['limit'])) {
			$start = (int)($data['start'] ?? 0);
			$limit = (int)($data['limit'] ?? 20);

			if ($start < 0) {
				$start = 0;
			}

			if ($limit < 1) {
				$limit = 20;
			}

			$sql .= " LIMIT " . $start . "," . $limit;
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Get Total Enquiries
	 *
	 * @return int
	 */
	public function getTotalEnquiries(): int {
		$this->ensureTable();

		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "enquiry`");

		return (int)$query->row['total'];
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
