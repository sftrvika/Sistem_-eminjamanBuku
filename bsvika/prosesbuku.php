<?php
include "koneksi.php";
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$penulis=$_POST['id_penulis'];
$penerbit=$_POST['id_penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$genre=$_POST['genre'];
$query="insert into tabel_buku(kode_buku,judul_buku,id_penulis,id_penerbit,tahun_terbit,genre)
	values('$kode_buku','$judul_buku','$penulis','$penerbit','$tahun_terbit','$genre')";
	$result=mysqli_query($koneksi,$query);
	if($result){
		echo "<script>alert('Data berhasil disimpan');
		document.location.href='buku.php'</script>\n";
	}else{
		echo "<script>alert('Data gagal simpan');
		document.location.href='input_buku.php'</script>\n";
		
	}
 ?>