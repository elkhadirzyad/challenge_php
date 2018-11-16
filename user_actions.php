
        <div class="well" style="background-color:yellow;">
            <p><b> <?php if (isset ($_SESSION['login'])) echo "Hi ".$_SESSION['email']."<br />";?></b>
             In this application, there are many things you can do :

            <ul>

            <li> As a User, U can sign up using email & password </li>
 <li> As a User, U can sign in using  email & password </li>
  <li> As a User, U can display the list of shops sorted by distance </li>
 <li> As a User, U can like a shop, so it can be added to ur preferred shops </li>

 </ul>
            
            
             </p>
        </div>
        
        <?php if (isset ($_SESSION['login'])){ ?>
        <div class="well">
            <ul class="nav nav-list">

             <li>
                            <a href="index.php"><h5>NearBy shops</h5></a>
                        </li>
                   
                    <li>
            <a id="prefered_shops" href="#"><h5>Prefered shops<h5></a>
                        </li>

      


            </ul>
        </div>
        <?php } ?>

       