<?php

require_once 'db.php';

class LikedShop extends db {



	function __construct()

	{

		db::__construct();
	}



    public function like_shop($shop_id,$user_id)
	{

        //$this->table="posts";
		
        // select posts in decreasing order 

        $sel=$this->db->prepare("INSERT into liked_shops (shop_id, user_id) values ('$shop_id','$user_id') ");

        $sel->execute();
		



	}

	public function dislike_shop($shop_id,$user_id)
	{

        //$this->table="posts";
		
        // select posts in decreasing order 

        $sel=$this->db->prepare("DELETE from liked_shops where  shop_id='$shop_id' and  user_id='$user_id' ");

        $sel->execute();
		



	}

	
    public function exist_like_shop($shop_id,$user_id)
	{

        //$this->table="posts";
		
        // select posts in decreasing order 

        $sel=$this->db->prepare("SELECT * from  liked_shops where shop_id='$shop_id' and user_id='$user_id' ");

        $sel->execute();

        return count($sel->fetchAll(PDO::FETCH_ASSOC));
		



	}
	

}