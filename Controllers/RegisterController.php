<?php


require '../Models/User.php';





$email=$_POST["email"];

$pass=$_POST["pass"];



if (empty($email) || empty($pass))

{
echo "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'> &times;</a><b> you have to fill email and pass </b> </div>"; exit();

}

else

{

$u=new User();

if ((($u-> check_email_existance($email)==0)))

	{$u->add_new_user($email,$pass); 
		echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'> &times;</a><b>You are registreted successfully</b> <a href='login.php'> Login </a></div> "; }

	else

		{echo "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'> &times;</a><b>this email is token or not valid</b> </div> ";  
	exit();}

	}

?>