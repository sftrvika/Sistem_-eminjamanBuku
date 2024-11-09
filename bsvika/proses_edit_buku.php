<?php

include "koneksi.php";
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$id_penulis=$_POST['id_penulis'];
$id_penerbit=$_POST['id_penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$genre=$_POST['genre'];

$query= mysqli_query($koneksi,"UPDATE tabel_buku SET kode_buku = '$kode_buku', judul_buku = '$judul_buku', id_penulis = '$id_penulis',id_penerbit = '$id_penerbit', tahun_terbit = '$tahun_terbit', genre = '$genre'
    where kode_buku ='$kode_buku'");

if ($query) {
	echo "<script>alert('data berhasil disimpan');
	document.location.href='buku.php'</script>\n";
}
else{
	echo "<script>alert('data gagal disimpan');
	document.location.href='edit_buku.php'</script>\n";
}
 ?>