<?php
namespace Opencart\Admin\Controller\Tool;
/**
 * Class Demo Reset
 *
 * @package Opencart\Admin\Controller\Tool
 */
class DemoReset extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('tool/demo_reset');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('tool/demo_reset', 'user_token=' . $this->session->data['user_token'])
		];

		$data['restore'] = $this->url->link('tool/demo_reset.restore', 'user_token=' . $this->session->data['user_token']);
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('tool/demo_reset', $data));
	}

	/**
	 * Restore
	 *
	 * @return void
	 */
	public function restore(): void {
		$this->load->language('tool/demo_reset');

		$json = [];

		if (!$this->user->hasPermission('modify', 'tool/demo_reset')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$snapshot = dirname(DIR_OPENCART) . '/docker/demo-snapshot.sql';

		if (!$json && !is_file($snapshot)) {
			$json['error'] = $this->language->get('error_snapshot');
		}

		if (!$json) {
			set_time_limit(0);

			$command = 'mariadb';

			if (!function_exists('proc_open')) {
				$json['error'] = $this->language->get('error_restore');
			} else {
				$descriptors = [
					0 => ['file', $snapshot, 'r'],
					1 => ['pipe', 'w'],
					2 => ['pipe', 'w']
				];

				$process = proc_open(
					[
						$command,
						'-h' . DB_HOSTNAME,
						'-P' . (string)DB_PORT,
						'-u' . DB_USERNAME,
						DB_DATABASE
					],
					$descriptors,
					$pipes,
					null,
					[
						'MYSQL_PWD' => DB_PASSWORD,
						'PATH'      => (string)getenv('PATH')
					]
				);

				if (!is_resource($process)) {
					$json['error'] = $this->language->get('error_restore');
				} else {
					$stdout = stream_get_contents($pipes[1]);
					$stderr = stream_get_contents($pipes[2]);

					fclose($pipes[1]);
					fclose($pipes[2]);

					$code = proc_close($process);

					if ($code !== 0) {
						$json['error'] = trim($stderr ?: $stdout) ?: $this->language->get('error_restore');
					}
				}
			}
		}

		if (!$json) {
			$this->clearCache(DIR_CACHE);

			$json['success'] = $this->language->get('text_success');
			$json['redirect'] = $this->url->link('common/login', '', true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Clear generated cache files, keeping directory placeholders.
	 *
	 * @param string $directory
	 *
	 * @return void
	 */
	private function clearCache(string $directory): void {
		$files = glob(rtrim($directory, '/') . '/*');

		if (!$files) {
			return;
		}

		foreach ($files as $file) {
			if (is_dir($file)) {
				$this->clearCache($file);
			} elseif (basename($file) !== 'index.html') {
				unlink($file);
			}
		}
	}
}
