<?php
	include('includes/db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sigup</title>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/kien-01.png">
		</div>
		<div class="login-content">
			<form action="checksignup.php" method="POST">
				<h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-home"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" name="Address" placeholder="Address" required>
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" name="PhoneNumber" placeholder="PhoneNumber" required>
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-at"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" name="Email" placeholder="Email" required>
                    </div>
                 </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" name="UserName" placeholder="UserName" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" name="PassWord" placeholder="Password" required> 
            	   </div>
            	</div>
            	<input type="submit" name="reg" class="btn" value="Signup">
				<div class="back">
				<a href="customer_login.php"><i class="fas fa-arrow-circle-left"></i></a>
				</div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
