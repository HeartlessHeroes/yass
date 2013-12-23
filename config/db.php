<?php
class db {
	public function __construct() {
		Config::write('db.host', '127.0.0.1');
		Config::write('db.port', '3306');
		Config::write('db.basename', 'yass');
		Config::write('db.user', 'root');
		Config::write('db.password', 't1ger&0SX');
	}
}