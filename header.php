<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>index</title>

        
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title>Your prefered Shops</title>
            <link rel="stylesheet" href="css/bootstrap.css"/>
            <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
            <link rel="stylesheet" href="css/style.css"/>
            <link rel="stylesheet" href="css/font-awesome.css"/>

            <script src="js/jquery-1.10.0.min.js"></script>
            <script src="js/bootstrap.js"></script>
        

     

            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="index.php">Elkhadir Shops</a>
                        <div class="nav-collapse collapse" style="float:right;  padding-top: 10px;">
                            <?php if (!isset ($_SESSION['login'])){ ?>
                                <a href="login.php" style="text-decoration: none;color: white;"> Login | </a>
                           <a href="register.php" style="text-decoration: none;color: white;"> Register </a>
                                <?php } ?>
                
                                <?php if (isset ($_SESSION['login'])){ ?>
                
                            <a href="Controllers/LogoutController.php" style="text-decoration: none;color: white;"> LogOut  </a>
                           
                
                                        
                                    
                
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            </head>