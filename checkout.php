<?php 

$active='Account';
include("includes/header.php");

?> 
   <div id="content">
        <div class="container">

            <div class="col-md-12">
               
               <ul class="breadcrumb">

                   <li>
                       <a href="index.php">Home</a>
                   </li>

                   <li>
                       Cart
                   </li>

               </ul>
               
           </div>
           <div class="col-md-9">
           
           <?php 
           
           if(!isset($_SESSION['UserName'])){
               
               include("customer_login.php");
               
           }

           else{
               
               include("payment_options.php");
               
           }
           
           ?>
           
           </div>

        </div>

   </div>
   
   <?php 
    
    include("includes/footer.php");
    
   ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>