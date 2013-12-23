<?php
function __autoload($className) {
	if (file_exists(ROOT . DS . 'library' . DS . strtolower($className) . '.class.php')) {
		require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.class.php');
	} else if (file_exists(ROOT . DS . 'config' . DS . strtolower($className) . '.php')) {
		require_once(ROOT . DS . 'config' . DS . strtolower($className) . '.php');
	} else {
		/* Error Generation Code Here */
	}
}