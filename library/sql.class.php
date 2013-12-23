<?php

class SQL {
    protected $_dbHandle;
    protected $_result;
	protected $_query;
	protected $_table;
	protected $_dbConfig;
	
    public function __construct() {
        // Attempt DB connection
        try {
			// load db config
			$_dbConfig = new db;
		    // building data source name from config
		    $dsn = 'mysql:host=' . Config::read('db.host') .
		           ';dbname='    . Config::read('db.basename') .
		           ';port='      . Config::read('db.port') .
		           ';connect_timeout=15';
		    // getting DB user from config                
		    $user = Config::read('db.user');
		    // getting DB password from config                
		    $password = Config::read('db.password');

		    $this->_dbHandle = new PDO($dsn, $user, $password);
            $this->_dbHandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Successfully connected to the database!';
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
		
	}
	
	public function disconnect() {
		#_TODO
	}
	
	public function where() {
		#_TODO
	}
	
	public function like() {
		#_TODO
	}
	
	public function orderBy() {
		#_TODO
	}
	
	public function custom() {
		#_TODO
	}
	
	public function describe() {
		#_TODO
	}
	
	public function delete() {
		#_TODO
	}
	
	public function save() {
		#_TODO
	}
	
	public function clear() {
		#_TODO
	}
	
	public function error() {
		return $this->_dbHandle->errorInfo();
	}
}