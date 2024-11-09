<?php
include "koneksi.php";
session_start();

$myemail=$_POST['email'];
$mypassword=$_POST['psw'];


$sql="SELECT * FROM admin WHERE email='$myemail' and password='$mypassword'";
$result=mysqli_query($koneksi, $sql);

$count=mysqli_num_rows($result);

if($count>0){

$_SESSION['myemail'] = $myemail;

header("location:login_success.php");
}
else {
 header("location:index.php");
}
?>