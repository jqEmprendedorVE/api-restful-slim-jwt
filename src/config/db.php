<?php

/**
* 
*/
class db
{
	private $dbhost = 'www.sgiv.org';
	private $dbuser = 'sgivestad';
	private $dbpass	= 'SokaStats%1';
	private $dbname = 'sgivestad2';

	function connect(){
		$mysql_connect_string = "mysql:host=$this->dbhost;dbname=$this->dbname;";
		$dbConnection = new PDO($mysql_connect_string,$this->dbuser,$this->dbpass);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $dbConnection;
	}
}