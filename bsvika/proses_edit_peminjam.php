<?php
include "koneksi.php";
// $id_peminjam=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$alamat=$_POST['alamat'];
$nomor_telp=$_POST['nomor_telp'];

$query= mysqli_query($koneksi,"UPDATE tabel_pinjaman SET nama_peminjam = '$nama_peminjam', alamat = '$alamat', nomor_telp = '$nomor_telp'
    where id_peminjam ='$id_peminjam'");

if ($query) {
	echo "<script>alert('data berhasil disimpan');
	document.location.href='peminjam.php'</script>\n";
}
else{
	echo "<script>alert('data gagal disimpan');
	document.location.href='edit_peminjam.php'</script>\n";
}
 ?>