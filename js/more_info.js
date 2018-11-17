


function moreInfo ($shop_id){

    event.preventDefault();     

   

   

    $.ajax({


        url: './Controllers/MoreInfoController.php',

        method: "GET",

        data: { 
            id: $shop_id, 
            
          },
          success: function(data) {

            $("#more_info").html(data);
              
              //$("#more_info").html(response);
          },
    })
 

	
}
