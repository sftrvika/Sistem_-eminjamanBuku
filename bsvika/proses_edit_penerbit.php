<?php
include "koneksi.php";

$id_penerbit=$_POST['id_penerbit'];
$nama_penerbit=$_POST['nama_penerbit'];
$kota_penerbit=$_POST['kota_penerbit'];

$query = mysqli_query($koneksi, "UPDATE tabel_penerbit SET nama_penerbit ='$nama_penerbit',
	kota_penerbit ='$kota_penerbit'
	where id_penerbit = '$id_penerbit'");
// echo  "UPDATE tabel_penerbit SET id_penerbit ='$id_penerbit',
// 	nama_penerbit ='$nama_penerbit',
// 	kota_penerbit ='$kota_penerbit',
// 	where id_penerbit = '$_GET[id]'";
if ($query) {
	echo "<script>alert('data berhasil disimpan');
	document.location.href='penerbit.php'</script>\n";
}
else {
	echo "<script>alert('data gagal disimpan');
	document.location.href='edit_penerbit.php'</script>\n";
}
?> 