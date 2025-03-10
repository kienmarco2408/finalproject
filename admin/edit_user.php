<?php 

    if(!isset($_SESSION['admin_username'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<?php 

    if(isset($_GET['edit_user'])){
        
        $edit_user = $_GET['edit_user'];
        
        $get_user = "select * from admins where admin_id='$edit_user'";
        
        $run_user = mysqli_query($con,$get_user);
        
        $row_user = mysqli_fetch_array($run_user);
        
        $user_id = $row_user['admin_id'];
        
        $user_name = $row_user['admin_name'];
        
        $user_pass = $row_user['admin_pass'];
        
        $user_username = $row_user['admin_username'];
        
        $user_image = $row_user['admin_image'];
    
        $user_contact = $row_user['admin_contact'];
        
    }

?>
    
<div class="row">
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit User
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Edit User
                   
               </h3>
               
           </div>
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Name </label> 
                      
                      <div class="col-md-6">
                          
                          <input value="<?php echo $user_name; ?>" name="admin_name" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Username </label> 
                      
                      <div class="col-md-6">
                          
                          <input value="<?php echo $user_username; ?>"  name="admin_username" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Password </label> 
                      
                      <div class="col-md-6">
                          
                          <input value="<?php echo $user_pass; ?>"  name="admin_pass" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                                     
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Contact </label> 
                      
                      <div class="col-md-6">
                          
                          <input value="<?php echo $user_contact; ?>"  name="admin_contact" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Image </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="admin_image" type="file" class="form-control" required>
                          
                          <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_name; ?>" width="70" height="70">
                          
                      </div>
                       
                   </div>
                   
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="update" value="Update User" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                       
                   </div>
                   
               </form>
               
           </div>
            
        </div>
        
    </div>
    
</div>


<?php 

if(isset($_POST['update'])){
    
    $user_name = $_POST['admin_name'];
    $user_username = $_POST['admin_username'];
    $user_pass = $_POST['admin_pass'];
    $user_contact = $_POST['admin_contact'];
    
    $user_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"admin_images/$user_image");
    
    $update_user = "update admins set admin_name='$user_name',admin_username='$user_username',admin_pass='$user_pass',admin_contact='$user_contact',admin_image='$user_image' where admin_id='$user_id'";
    
    $run_user = mysqli_query($con,$update_user);
    
    if($run_user){
        
        echo "<script>alert('User has been updated sucessfully')</script>";
        echo "<script>window.open('login.php','_self')</script>";
        
        session_destroy();
        
    }
    
}

?>


<?php } ?>