<?php


define('USER', 'root');

define('PASS', 'root');

define('DBNAME', 'shops');

class db{

public $db;

	function __construct(){


		$this->db=new PDO("mysql:host=localhost;dbname=".DBNAME, USER, PASS);
    // set the PDO error mode to exception
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}


	

}


	?>