
    <?php session_start();

if (isset($_SESSION['login']))

header('location:index.php');

?>
    
    <?php include("header.php");?>

     <script type="text/javascript" src='JS/sign_up.js'></script>
         <body>

         <div class="container">

          <div class="col-md-8" id="sign_up_message">

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
                        </div>
                        
                        <div class="span4 offset2">
                            <h4>Registration</h4>
                            <form  id="sign_up_form" action="" method="post"  class="navbar-form" >
                                  <input type="text" name="email" placeholder="email">
                                  <input type="password" name="pass" placeholder="pass">
                                  <button id="sign_up" class="btn">Register</button>
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