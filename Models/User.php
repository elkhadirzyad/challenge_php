<?php

require_once 'db.php';

class User extends db {



	function __construct()

	{

		db::__construct();
	}



public function check_email_existance($email)
	{

        //$this->table="posts";
		
        // select posts in decreasing order 

		$sel=$this->db->prepare("SELECT * from user where email='$email'");

        $sel->execute();

        return (count($sel->fetchAll(PDO::FETCH_ASSOC)));
		



	}

	public function user_info($email)
	{

        //$this->table="posts";
		
        // select posts in decreasing order 

		$sel=$this->db->prepare("SELECT * from user where email='$email'");

        $sel->execute();

        return ($sel->fetchAll(PDO::FETCH_ASSOC));
		



	}


	public function add_new_user($b,$c)
	{
        $sel=$this->db->prepare("INSERT into user (email,pass) values ('$b','$c') ");

        $sel->execute();

	}

	

}