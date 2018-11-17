<?php



require '../Models/Shop.php';





$shop=new Shop();


$id_shop=$_GET['id'];


$info=$shop->get_info($id_shop);





$name=$info[0]['name'];

$description=$info[0]['description'];

$distance=$info[0]['distance'];

 
$data='<div class="row">
      <div class="span5">
                  <img src="img/holder.png" alt="DevAndClick" width="470" height="310">
          </div>

                <div class="span4">
                    <h4>'.$name.'</h4>
                   
                    <p>'.$description.'</p>
                    <h4>NearBy:'.$distance.'Km</h4>
                    
                </div>
 </div>';

              

            


            
 

 echo $data;






?>


