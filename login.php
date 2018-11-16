
     <?php session_start();

     if (isset($_SESSION['login']))

     header('location:index.php');

     ?>

     <?php include("header.php");?>
     <script type="text/javascript" src="JS/login.js"></script> 
         <body>

  <div class="container">
       <div class="col-md-8" id="login_message">

<!-- alert from sign up -->
              </div>
            <div class="row">
                <div class="span12">
                  
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <div class="span4">
                            <h4>Not registred ?</h4>
                            <em>
                                We invite you to register<br />
                                In order to Like/dislike a nearBy shop, and so more ...
                            </em>
                                <br /><br />
                                <a href="register.php" class="btn btn-primary">Register</a>
                                
                            </div>
                            
                            <div class="span4 offset2">
                                <h4>Connexion</h4>
                                <form id="login_form" class="navbar-form">
                                  <input name="email" type="text" placeholder="email">
                                  <input name="pass" type="password" placeholder="pass">
                                  <button type="submit" class="btn" id="login">Login</button>
                               </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
             
         </body>
         <hr>
     <?php include("footer.html");?>
    </html>