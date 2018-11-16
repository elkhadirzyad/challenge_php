<?php


require '../Models/User.php';



session_start();


 



$u=new User();


$pass=($_POST['pass']);



$email=$_POST['email'];


	$info=$u->user_info($email);

	if ($info==null)
	{

	echo "false";
	exit(0);
	}

	else
    {
	$password=$info[0]['pass'];
	$id=$info[0]['id'];
	}


if($u-> check_email_existance($email)==1 && $password==$pass)

{

	

		
    $_SESSION['email']=$email;
	$_SESSION['login']=true;
	$_SESSION['id']=$id;

		echo "true";
       

		
	
}

else
{




echo "false";

 

}



//////////define regular expersssions to validate the fields ////////////////


?>