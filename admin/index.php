<?php 
    session_start();
    include("includes/db.php");
    if(!isset($_SESSION['admin_username'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }

    else{

        $admin_session = $_SESSION['admin_username'];

        $get_admin = "select * from admins where admin_username='$admin_session'";

        $run_admin = mysqli_query($con, $get_admin);

        $row_admin = mysqli_fetch_array($run_admin);

        $admins_id = $row_admin['admin_id'];

        $admin_name = $row_admin['admin_name'];

        $admin_username = $row_admin['admin_username'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_contact = $row_admin['admin_contact'];

        $get_products = "select * from products";

        $run_products = mysqli_query($con,$get_products);

        $count_products = mysqli_num_rows($run_products);

        $get_customers = "select * from account";

        $run_customers = mysqli_query($con,$get_customers);

        $count_customers = mysqli_num_rows($run_customers);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marco Shop Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper">
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                    }

                    if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                    }

                    if(isset($_GET['view_products'])){

                        include("view_products.php");

                    }

                    if(isset($_GET['delete_product'])){

                        include("delete_product.php");

                    }

                    if(isset($_GET['edit_product'])){

                        include("edit_product.php");

                    }

                    if(isset($_GET['insert_cat'])){

                        include("insert_cat.php");

                    }

                    if(isset($_GET['view_cats'])){

                        include("view_cats.php");

                    }

                    if(isset($_GET['delete_cat'])){

                        include("delete_cat.php");

                    }

                    if(isset($_GET['edit_cat'])){

                        include("edit_cat.php");

                    }

                    if(isset($_GET['insert_slide'])){

                        include("insert_slide.php");

                    }

                    if(isset($_GET['view_slides'])){

                        include("view_slides.php");

                    }

                    if(isset($_GET['edit_slide'])){

                        include("edit_slide.php");

                    }

                    if(isset($_GET['view_customers'])){

                        include("view_customers.php");

                    }

                    if(isset($_GET['delete_customer'])){

                        include("delete_customer.php");

                    }

                    if(isset($_GET['view_users'])){

                        include("view_users.php");

                    }


                    if(isset($_GET['insert_user'])){

                        include("insert_user.php");

                    }

                    if(isset($_GET['edit_user'])){

                        include("edit_user.php");

                    }

                    if(isset($_GET['delete_user'])){

                        include("delete_user.php");

                    }
                
                
                ?>
                
            </div>
        </div>
    </div>

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>
<?php } ?>    