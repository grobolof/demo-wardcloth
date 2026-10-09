<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Class Compare
 *
 * Product comparison is disabled. The route stays so old links leave the page.
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Compare extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->response->redirect($this->url->link('common/home', 'language=' . $this->config->get('config_language'), true));
	}

	/**
	 * Add
	 *
	 * @return void
	 */
	public function add(): void {
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode([]));
	}
}
