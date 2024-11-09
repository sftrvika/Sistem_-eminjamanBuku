<?php
$koneksi=mysqli_connect("localhost","root","","db_23022019_vika");
if (!$koneksi){
	die("!koneksi error,".mysqli_connect_error());
}

?>