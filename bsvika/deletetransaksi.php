<?php

$id_transaksi= $_GET['id'];

$koneksi = mysqli_connect("localhost","root","","db_23022019_vika");
if(!$koneksi){
	die("koneksi error,".mysqli_connect_error());
}

$query = "DELETE FROM `transaksi_peminjaman` WHERE id_transaksi= '$id_transaksi'";

 $hasil= mysqli_query($koneksi,$query);
 if($hasil){
	header("location:transaksi.php?pesan=hapus");
 }else{
 		echo "<script>alert('Data gagal hapus');
		document.location.href='transaksi.php'</script>\n";

 }

?>