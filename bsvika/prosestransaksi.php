<?php
include "koneksi.php";

$id_buku=$_POST['id_buku'];
$id_peminjam=$_POST['id_peminjam'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
$status=$_POST['status'];

$query="insert into transaksi_peminjaman(id_buku,id_peminjam,tgl_pinjam,tgl_kembali,status)
	values ('$id_buku','$id_peminjam','$tgl_pinjam','$tgl_kembali','$status')";
	
	$result=mysqli_query($koneksi,$query);
	if($result){
		echo "<script>alert('Data berhasil disimpan');
		document.location.href='transaksi.php'</script>\n";
	}else{
		echo "<script>alert('Data gagal simpan');
		document.location.href='input_transaksi.php'</script>\n";
		
	}
 ?>
