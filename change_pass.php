<h1 align="center">Change Password </h1>

<form action="" method="post" enctype="mutipart/form-data">
	
	<div class="form-group">
		
		<label> Your Old Password: </label>

		<input type="text" name="old_pass" class="form-control" required>

	</div>

	<div class="form-group">
		
		<label> Your New Password: </label>

		<input type="text" name="new_pass" class="form-control" required>

	</div>

	<div class="form-group">
		
		<label> Confirm Your New Password:</label>

		<input type="text" name="new_pass_again" class="form-control" required>

	</div>
	<div class="text-center">

		<button type="submit" name="submit" class="btn btn-primary">
			
			<i class="fa fa-user-md"></i> Submit

		</button>
		
	</div>

</form>

<?php 
if(isset($_POST['submit'])){
    
    $username = $_SESSION['UserName'];
    
    $old_pass = $_POST['old_pass'];
    
    $new_pass = $_POST['new_pass'];
    
    $new_pass_again = $_POST['new_pass_again'];
    
    $sel_old_pass = "select * from account where Password='$old_pass'";
    
    $run_old_pass = mysqli_query($con,$sel_old_pass);
    
    $check_old_pass = mysqli_fetch_array($run_old_pass);
    
    if($check_old_pass==0){
        
        echo "<script>alert('Sorry, your current password did not valid. Please try again')</script>";
        
        exit();
        
    }
    
    if($new_pass!=$new_pass_again){
        
        echo "<script>alert('Sorry, your new password did not match')</script>";
        
        exit();
        
    }
    
    $update_pass = "update account set Password='$new_pass' where UserName='$username'";
    
    $run_pass = mysqli_query($con,$update_pass);
    
    if($run_pass){
        
        echo "<script>alert('Your password has been updated')</script>";
        
        echo "<script>window.open('my_account.php','_self')</script>";
        
    }
    
}
?>