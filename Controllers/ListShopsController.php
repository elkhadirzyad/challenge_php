<?php



require 'Models/Shop.php';

require 'Models/LikedShop.php';



$shop=new Shop();

$likedShop=new LikedShop();

$data='';

$shops=$shop->get_list();

foreach ($shops as $p) {

$id_shop=$p['id'];

$name=$p['name'];

$description=$p['description'];

 $data=$data. '<li class="span3"> 
 <div class="thumbnail">
 <div id="name" style=" margin-bottom: 10px;"><h4 style="margin-left: 100px;">'.$name.'</h4> </div>
     <img src="img/holder.png" alt="DevAndClick" width="300" height="300">';

     $data=$data.'<div class="caption">';

    $data=$data.'<a class="btn btn-danger" onClick="moreInfo('.$id_shop.')">More info</a>';
     if (isset ($_SESSION['login']))
{
   
    

      if ($likedShop->exist_like_shop($id_shop,$_SESSION['id'])==0)

      $data=$data.'<div style="float:right" id="contain_like_dislike'.$id_shop.'"><a class="btn btn-primary" id="like'.$id_shop.'" onClick="likeOrDislike('.$id_shop.')">Like</a></div>';
      
      else

      $data=$data.'<div style="float:right" id="contain_like_dislike'.$id_shop.'"><a class="btn btn-success" id="dislike'.$id_shop.'" onClick="likeOrDislike('.$id_shop.')">Dislike</a></div>';

     
     
        
    
}
$data=$data.'</div>';
$data=$data.'</div></li>';

}
              

            


            
 

 echo $data;






?>


