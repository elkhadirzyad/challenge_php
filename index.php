
     <?php session_start(); include("header.php"); ?>
     <script type="text/javascript" src="JS/likeOrDislike.js"></script> 
     <script type="text/javascript" src="JS/prefered_shops.js"></script> 
     <script type="text/javascript" src="JS/more_info.js"></script> 
         <body>

        <div class="container">
    <div class="row">

        <?php include("navigation.php");?>
        
        
        <div class="span9" id="more_info">

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