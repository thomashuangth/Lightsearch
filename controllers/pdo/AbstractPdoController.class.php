<?php

abstract class AbstractPdoController {
	const HOST = '127.0.0.1';
	const DATABASE_NAME = 'lightsearch1_db';
	const USER = 'root';
	const PASSWORD = 'root';
	
	protected $link;
	
	public function __construct() {
		$this->link = mysql_connect(self::HOST,self::USER,self::PASSWORD);// or mysql_connect(self::HOST1,self::USER,self::PASSWORD);
		mysql_select_db(self::DATABASE_NAME, $this->link);
		
	}
}
?>