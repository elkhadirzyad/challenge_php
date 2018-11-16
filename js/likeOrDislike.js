


function likeOrDislike ($shop_id){

    event.preventDefault();     

    if (event.srcElement.id=="like"+$shop_id)

   
 {
    $.ajax({


        url: './Controllers/LikeShopController.php',

        method: "GET",

        data: { 
            id: $shop_id, 
            
          },
          success: function(response) {

              div_id_like="#contain_like_dislike"+$shop_id;
              alter_like_to_dislike="<a class='btn btn-success' id='dislike"+$shop_id+"' onClick='likeOrDislike("+$shop_id+")'>Dislike</a>";
              
              $(div_id_like).html(alter_like_to_dislike);
          },
    })
 }
else
 {
    $.ajax({


        url: './Controllers/DislikeShopController.php',

        method: "GET",

        data: { 
            id: $shop_id, 
            
          },
          success: function(response) {

              div_id_dislike="#contain_like_dislike"+$shop_id;
              alter_dislike_to_like="<a class='btn btn-primary' id='like"+$shop_id+"' onClick='likeOrDislike("+$shop_id+")'>Like</a>";
             
              $(div_id_dislike).html(alter_dislike_to_like);
          },
    })
 }
 

	
}
