<?php
class core {
	public function __construct() {
		Config::write('core.dev', TRUE);
		Config::write('core.base_path', 'http://yass.com');
		$_dbHandler = new SQL();
		$_routerHandler = new Router;
	}
}