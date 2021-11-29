<?php 

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con,$get_product);

    $row_product = mysqli_fetch_array($run_product);

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marco Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
                   
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="index.php">MarcoStore</a>
            </div>
            <ul class="nav navbar-nav left">
                       
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="index.php">Home</a>
                       </li>
                       <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="shop.php">Shop</a>
                       </li>
                       
                       <li class="<?php if($active=='Cart') echo"active"; ?>">
                           <a href="cart.php">Shopping Cart</a>
                       </li>               
                   </ul>
            
            <ul class="nav navbar-nav navbar-right">
            <li class="<?php if($active=='Account') echo"active"; ?>">
                             
                <?php 
 
                    if(!isset($_SESSION['UserName'])){
 
                        echo "<a href = 'customer_login.php'> Welcome: Guest </a>";
 
                    }
                    else{
 
                        echo "<a href = 'my_account.php?my_orders'> Welcome: " . $_SESSION['UserName'] . " </a>";
 
                    }
 
                ?>
 
            </li> 
            <li><a href="customer_register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li>
                        <?php 
                           
                           if(!isset($_SESSION['UserName'])){
                      
                               echo "<a href='customer_login.php'><span class='glyphicon glyphicon-log-in'></span> Login </a>";

                              }
                              
                           else{

                               echo " <a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> LogOut </a> ";

                              }
                          
                        ?> 
                </a>
            </li>
            </ul>
        </div>
    </nav>
           
