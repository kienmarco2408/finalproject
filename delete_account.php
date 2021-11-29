<center>
	
	<h1> Do You Realy Want To Delete Your Account ?</h1>

	<form action=""	method="post">
		
		<input type="submit" name="Yes" value="Yes, I Want To Delete" class="btn btn-primary">

		<input type="submit" name="No" value="No, I Dont Want To Delete" class="btn btn-danger">

	</form>

</center>

<?php 

$UserName = $_SESSION['UserName'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "delete from account where UserName='$UserName'";
    
    $run_delete_customer = mysqli_query($con,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Successfully delete your account, feel sorry about this. Good Bye')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account.php','_self')</script>";
    
}

?>