<?php 

    $session = $_SESSION['UserName'];

    $get_customer = "select * from account where UserName='$session'";

    $run_customer = mysqli_query($con,$get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $id = $row_customer['id'];

    $Email = $row_customer['Email'];

    $UserName = $row_customer['UserName'];

    $Address = $row_customer['Address'];

    $PhoneNumber = $row_customer['PhoneNumber'];

?>

<h1 align="center"> Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        
        <label> Customer Email: </label>
        
        <input type="text" name="Email" class="form-control" value="<?php echo $Email; ?>" required>
        
    </div>
    
    <div class="form-group">
        
        <label> Customer Username: </label>
        
        <input type="text" name="UserName" class="form-control" value="<?php echo $UserName; ?>" required>
        
    </div>
    
    <div class="form-group">
        
        <label> Customer Address: </label>
        
        <input type="text" name="Address" class="form-control" value="<?php echo $Address; ?>" required>
        
    </div>
    
    <div class="form-group">
        
        <label> Customer PhoneNumber: </label>
        
        <input type="text" name="PhoneNumber" class="form-control" value="<?php echo $PhoneNumber; ?>" required>
        
    </div>
    
    <div class="text-center">
        
        <button name="update" class="btn btn-primary">
            
            <i class="fa fa-user-md"></i> Update Now
            
        </button>
        
    </div>
    
</form>

<?php 

if(isset($_POST['update'])){
    
    $update_id = $id;

    $UserName = $_POST['UserName'];

    $get = "select * from account where UserName = '$UserName'";

    $run = mysqli_query($con, $get);

    $check = mysqli_num_rows($run);

    if($check > 0)
    {
        echo "<script> alert (  ) </script>";
    }
    
    else{
    $Email = $_POST['Email'];
    
    $Address = $_POST['Address'];
     
    $PhoneNumber = $_POST['PhoneNumber'];
    
    $update_customer = "update account set Email='$Email',UserName='$UserName',Address='$Address',PhoneNumber='$PhoneNumber' where id='$id' ";
    
    $run_customer = mysqli_query($con,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";
        
        echo "<script>window.open('./logout.php','_self')</script>";
        
        }
    }
}

?>