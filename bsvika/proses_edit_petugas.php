<?php
include "koneksi.php";

$id_petugas=$_POST['id_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$query= mysqli_query($koneksi,"UPDATE tabel_petugas SET nama_petugas = '$nama_petugas', username = '$username',password = '$password'
    where id_petugas ='$id_petugas'");

if ($query) {
	echo "<script>alert('data berhasil disimpan');
	document.location.href='petugas.php'</script>\n";
}
else{
	echo "<script>alert('data gagal disimpan');
	document.location.href='edit_petugas.php'</script>\n";
}
 ?>