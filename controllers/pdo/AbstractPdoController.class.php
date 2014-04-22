<?php

abstract class AbstractPdoController {
	
	const DRIVER = 'mysql';
	const HOST = 'localhost';
	const PORT = '3306';
	const DATABASE_NAME = 'lightsearch1_db';
	const USER = 'root';
	const PASSWORD = 'root';
	
	protected $pdo;
	
	
	public function __construct() {
		$dsn = self::DRIVER.':host='.self::HOST.';port='.self::PORT.';dbname='.self::DATABASE_NAME;
		
		$this->pdo = new PDO($dsn, self::USER, self::PASSWORD);
		
	}

}

?>