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

		$data['restore'] = $this->url->link('tool/demo_reset.restore', 'user_token=' . $this->session->data['user_token'], true);
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

		if (!$json) {
			set_time_limit(0);

			try {
				$this->load->model('tool/demo_reset');

				$this->model_tool_demo_reset->restore();

				$this->clearCache(DIR_CACHE);
				$this->clearCache(DIR_IMAGE . 'cache/');

				$json['success'] = $this->language->get('text_success');
			} catch (\Exception $e) {
				$this->log->write($e->getMessage());

				$json['error'] = $this->language->get('error_restore');
			}
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
