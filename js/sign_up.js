$(document).ready(function(){


	$("#sign_up").click(function(event){

	
      
        	event.preventDefault(); /// it allows to stay a the same page in case of success

        	$.ajax({


			url: "./Controllers/RegisterController.php",

			method: "POST",

			data: $("#sign_up_form").serialize(),  /// it allows us to send data to controller, we have
			//// to send the brand id 
			success: function (data)
			{

            $("#sign_up_message").html(data);

			}


		})
       
       })
       
	})