<?php
include "koneksi.php";
$nama_peminjam=$_POST['nama_peminjam'];
$alamat=$_POST['alamat'];
$nomor_telp=$_POST['nomor_telp'];
$query="insert into tabel_pinjaman(nama_peminjam,alamat,nomor_telp)
	values('$nama_peminjam','$alamat','$nomor_telp')";
	$result=mysqli_query($koneksi,$query);
	if($result){
		echo "<script>alert('Data berhasil disimpan');
		document.location.href='peminjam.php'</script>\n";
	}else{
		echo "<script>alert('Data gagal simpan');
		document.location.href='input_peminjam.php'</script>\n";
		
	}
 ?>