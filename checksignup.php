<?php
    include('includes/db.php');

    if(isset($_POST['reg'])){
        $Address = $_POST['Address'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Email = $_POST['Email'];
        $UserName = $_POST['UserName'];
        $PassWord = $_POST['PassWord'];
            $sql = "INSERT INTO account (UserName, Password, Address, PhoneNumber, Email) VALUES('$UserName', '$PassWord', '$Address', '$PhoneNumber', '$Email') ";
            $result = mysqli_query($con, $sql);
            if($result){
                header("Location: customer_login.php");
            }
            else{
                echo ' something';
            }
        
    }

    else{
        header("Location: customer_register.php");
    }

?>