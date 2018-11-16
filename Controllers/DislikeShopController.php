<?php



require '../Models/LikedShop.php';

session_start();




$conn=new LikedShop();

$user_id=$_SESSION['id'];
$shop_id=$_GET['id'];

$conn->dislike_shop($shop_id,$user_id);




?>


