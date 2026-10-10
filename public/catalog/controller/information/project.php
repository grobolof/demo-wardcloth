<?php
namespace Opencart\Catalog\Controller\Information;
/**
 * Class Project
 *
 * Demo credentials and store capabilities.
 *
 * @package Opencart\Catalog\Controller\Information
 */
class Project extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->document->setTitle('О проекте');

		$language = 'language=' . $this->config->get('config_language');

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => 'Главная',
			'href' => $this->url->link('common/home', $language)
		];

		$data['breadcrumbs'][] = [
			'text' => 'О проекте',
			'href' => $this->url->link('information/project', $language)
		];

		$catalog = rtrim((string)$this->config->get('config_url'), '/');

		if ($catalog === '') {
			$catalog = rtrim(HTTP_SERVER, '/');
		}

		$data['admin'] = $catalog . '/admin';
		$data['contact'] = $this->url->link('information/contact', $language);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/project', $data));
	}
}
