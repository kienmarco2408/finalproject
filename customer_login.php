
<?php
	include('includes/db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./styles/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="./images/wave.png">
	<div class="container">
		<div class="img">
			<img src="./images/kien-01.png">
		</div>
		<div class="login-content">
			<form action="checklogin.php" method="POST">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" name="UserName" placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" name="Password" placeholder="Password">
            	   </div>
            	</div>
				<a href="customer_register.php">Signup</a>
            	<input type="submit" class="btn" value="Login" name="Login-btn">
				<a href="index.php">
					<button type="button" class="btn" style="text-align:center">Home</button>
				</a>
			</form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
