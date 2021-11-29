<?php 
include('includes/db.php');
session_start();

if(isset($_POST['UserName']) && isset($_POST['Password'])){
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

        if (empty($UserName) || (empty($Password))){
            echo 'Please input username and pasword';
        }else{
            $sql = "SELECT * FROM account WHERE UserName ='$UserName' AND Password ='$Password' ";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) === 1){
                $rows = mysqli_fetch_assoc($result);
                $_SESSION['UserName'] = $rows['UserName'];
                $_SESSION['PhoneNumber'] = $rows['PhoneNumber'];
                $_SESSION['Email'] = $rows['Email']; 
                $_SESSION['id'] = $rows['id'];
                $_SESSION['Address'] = $rows['Address'];
                header("Location: index.php");
                }
            else {
                echo 'Wrong username or password';
                header("Location: customer_login.php");
                
            }            
        }
}
?>