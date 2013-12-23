<?php
class Router {
	public function __construct() {
		if ($_GET['url'] == 0){
			$this->url = array('home', 'home', 'home');
		} else {
			$this->url = explode("/", $_GET['url']);
		}
		$this->controller = $this->url[0];
		$this->model = $this->url[1];
		$this->view = $this->url[2];
		Config::write('router.controller', $this->controller);
		Config::write('router.model', $this->model);
		Config::write('router.view', $this->view);
		if (file_exists(ROOT . DS . 'controllers' . DS . strtolower($this->controller) . DS . 'index.php')) {
			require_once(ROOT . DS . 'controllers' . DS . strtolower($this->controller) . DS . 'index.php');
		} else {
			require_once(ROOT . DS . 'errors' . DS . '404.php');
		}
	}
}