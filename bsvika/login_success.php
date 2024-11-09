// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
<?php
session_start();
if(!empty($_SESSION['myemail'])){
    header("location:dashboard.php");
}else{
    header('location:index.php');
}


?>