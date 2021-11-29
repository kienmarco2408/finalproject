<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MarcoShop Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container">
       <form action="" class="form-login" method="post">
           <h2 class="form-login-heading"> Admin Login </h2>
           
           <input type="text" class="form-control" placeholder="Username" name="admin_username" required>
           
           <input type="password" class="form-control" placeholder="Password" name="admin_pass" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">
               
               Login
               
           </button>
           
       </form>
   </div>
    
</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_username = mysqli_real_escape_string($con,$_POST['admin_username']);
        
        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
        
        $get_admin = "select * from admins where admin_username='$admin_username' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_username']=$admin_username;
            
            echo "<script>alert('Logged in. Welcome Back ')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }

        else{
            
            echo "<script>alert('Username or Password is Wrong !')</script>";
            
        }
        
    }

?>