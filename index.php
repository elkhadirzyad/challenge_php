
     <?php session_start(); include("header.php"); ?>
     <script type="text/javascript" src="JS/likeOrDislike.js"></script> 
     <script type="text/javascript" src="JS/prefered_shops.js"></script> 
         <body>

        <div class="container">
    <div class="row">

        <?php include("navigation.php");?>
        
        
        <div class="span9">

            <ul class="thumbnails">

               
               <?php include("Controllers/ListShopsController.php");?>



            </ul>

            

        </div>
        
    </div>
</div>
             
         </body>
         <hr>
     <?php include("footer.html");?>
    </html>