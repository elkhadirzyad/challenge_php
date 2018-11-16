$(document).ready(function(){


	$("#login").click(function(event){

        	event.preventDefault(); /// it allows to stay a the same page in case of success

        	

        	

        	$.ajax({


			url: "./Controllers/LoginController.php",

			method: "POST",

			data: $("#login_form").serialize(),  
			success: function (data)
			{
                if (data=="true")


				window.location.href="index.php";
				
				else

				$("#login_message").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'> &times;</a><b>This login or pass is not correct</b> </div>");

			}
		})

       })

	})