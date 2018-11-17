<?php

require_once 'db.php';

class Shop extends db {



	function __construct()

	{

		db::__construct();
	}



    public function get_list()
	{

        // select shops by distance

		$sel=$this->db->prepare("SELECT * from shop ORDER BY distance ASC");

        $sel->execute();

        return ($sel->fetchAll(PDO::FETCH_ASSOC));
		



    }

    public function get_info($id)
	{

        // select shops by distance

		$sel=$this->db->prepare("SELECT * from shop where id='$id'");

        $sel->execute();

        return ($sel->fetchAll(PDO::FETCH_ASSOC));
		



    }

    public function get_prefered_list($user_id)
	{

        
		
        // select shops by distance

		$sel=$this->db->prepare("SELECT s.id, s.name, s.description from shop s, user u, liked_shops ls where s.id=ls.shop_id and u.id=ls.user_id and u.id='$user_id' ORDER BY s.distance ASC");

        $sel->execute();

        return ($sel->fetchAll(PDO::FETCH_ASSOC));
		



    }
    
    
	

}