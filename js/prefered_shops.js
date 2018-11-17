$(document).ready(function(){


	$("#prefered_shops").click(function(event){

	
      
        	event.preventDefault(); /// it allows to stay a the same page in case of success

        	$.ajax({


			url: "./Controllers/ListPreferedShopsController.php",

			method: "POST",

			
			success: function (data)
			{

            $("#more_info").html(data);

			}


		})
       
       })
       
	})