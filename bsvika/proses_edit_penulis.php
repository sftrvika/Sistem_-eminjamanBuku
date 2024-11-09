<?php
include "koneksi.php";

$id_penulis=$_POST['id_penulis'];
$nama_penilus=$_POST['nama_penilus'];
$tgl_lahir=$_POST['tgl_lahir'];

$var_foto= "pic-".time().".jpg";
$get_foto = $_FILES['file_foto']['tmp_name'];

if (empty($get_foto)){
	$query= mysqli_query($koneksi,"UPDATE tabel_penulis SET nama_penilus  = '$nama_penilus',tgl_lahir='$tgl_lahir'
    where id_penulis = '$id_penulis'");
    // echo 1;
}else{
	// echo 2;
	move_uploaded_file($get_foto, "images/".$var_foto);
	$query= mysqli_query($koneksi,"UPDATE tabel_penulis SET nama_penilus  = '$nama_penilus',tgl_lahir='$tgl_lahir',foto='$var_foto' where id_penulis = '$id_penulis'"); 

}


// if ($query) {
// 	echo "<script>alert('data berhasil disimpan');
// 	document.location.href='penulis.php'</script>\n";
// }
// else{
// 	echo "<script>alert('data gagal disimpan');
// 	document.location.href='penulis.php'</script>\n";
// }
// 
// $query= mysqli_query($koneksi,"UPDATE tabel_penulis SET nama_penilus  = '$nama_penilus',tgl_lahir='$tgl_lahir',foto='$foto'
//     where id_penulis = '$id_penulis'");

if ($query) {
	echo "<script>alert('data berhasil disimpan');
	document.location.href='penulis.php'</script>\n";
}
else{
	echo "<script>alert('data gagal disimpan');
	document.location.href='penulis.php'</script>\n";
}
 ?>