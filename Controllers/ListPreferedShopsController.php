<?php



require '../Models/Shop.php';


session_start();

$conn=new Shop();



$data='';

$user_id=$_SESSION['id'];

$shops=$conn->get_prefered_list($user_id);

foreach ($shops as $p) {

$id_shop=$p['id'];

$name=$p['name'];

$description=$p['description'];

 $data=$data. '<li class="span3"> 
 <div class="thumbnail">
 <div id="name" style=" margin-bottom: 10px;"><h4 style="margin-left: 100px;">'.$name.'</h4> </div>
     <img src="img/holder.png" alt="DevAndClick" width="300" height="300">';
     
    
    $data=$data.'<div class="caption">';

      

      $data=$data.'<div id="contain_like_dislike'.$id_shop.'"><a class="btn btn-success" id="dislike'.$id_shop.'" onClick="likeOrDislike('.$id_shop.')">Dislike</a></div>';

      $data=$data.'</div>';
   
    $data=$data.'</div></li>';
     



}
              

            


            
 

 echo $data;






?>


