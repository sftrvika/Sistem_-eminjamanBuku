<?php
include "koneksi.php";

$nama_petugas=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$query="insert into tabel_petugas(nama_petugas,username,password)
	values ('$nama_petugas','$username','$password') ";
	$result=mysqli_query($koneksi,$query);
	if($result){
		echo "<script>alert('Data berhasil disimpan');
		document.location.href='petugas.php'</script>\n";
	}else{
		echo "<script>alert('Data gagal simpan');
		document.location.href='input_petugas.php'</script>\n";
		
	}
 ?>