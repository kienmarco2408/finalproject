<?php 
    

    include("includes/db.php");

    if(!isset($_SESSION['admin_username'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }

    else{

?> 

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_products; ?> </div>
                           
                        <div> Products </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_products">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                           
                        <div> Customers </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_customers">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>  
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div class="mb-md thumb-info">

                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
                    
                    <div class="thumb-info-title">
                       
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        
                    </div>

                </div>
                
                <div class="mb-md">
                    <div class="widget-content-expanded">
                        <i class="fa fa-user"></i> <span> Username: </span> <?php echo $admin_username; ?> <br/>
                        <i class="fa fa-envelope"></i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>/
    
</div>


<?php } ?>