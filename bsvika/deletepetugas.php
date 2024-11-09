<?php
// include"koneksi.php";
$id_petugas = $_GET['id'];
// melakukan login ke database mysql
$koneksi = mysqli_connect("localhost","root","","db_23022019_vika");
if(!$koneksi){
	die("koneksi error,".mysqli_connect_error());
}
//memilih database yang akan digunakan
//mysqli_select_db("db_23022019_ananda") ;
//melakukan query untuk mengubah data di tabel peminjam

$query = "DELETE FROM `tabel_petugas` WHERE id_petugas= '$id_petugas'";
//mengeksekuensi perintah SELECT diatas
 $hasil= mysqli_query($koneksi,$query);
 if($hasil){
	header("location:petugas.php?pesan=hapus");
 }else{
 		echo "<script>alert('Data gagal hapus');
		document.location.href='petugas.php'</script>\n";

 }

?>