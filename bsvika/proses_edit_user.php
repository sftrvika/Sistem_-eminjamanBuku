<?php
include "koneksi.php";

$id_user=$_POST['id_user'];
$terdafrtar_pada=$_POST['terdafrtar_pada'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$terakhir_login=$_POST['terakhir_login'];
$alamat=$_POST['alamat'];
$jens_kelamin=$_POST['jens_kelamin'];
$var_foto= "pic-".time().".jpg";
$get_foto = $_FILES['file_foto']['tmp_name'];

if (empty($get_foto)){
$query= mysqli_query($koneksi,"UPDATE tabel_user SET terdafrtar_pada = '$terdafrtar_pada', password = '$password',nama = '$nama', terakhir_login = '$terakhir_login', alamat = '$alamat', jens_kelamin = '$jens_kelamin'
    where id_user ='$id_user'");

}else{
	// echo 2;
	move_uploaded_file($get_foto, "images/".$var_foto);
$query= mysqli_query($koneksi,"UPDATE tabel_user SET terdafrtar_pada = '$terdafrtar_pada', password = '$password',nama = '$nama', terakhir_login = '$terakhir_login', alamat = '$alamat', jens_kelamin = '$jens_kelamin',foto = '$var_foto'
    where id_user ='$id_user'");
}

if ($query) {
	echo "<script>alert('data berhasil disimpan');
	document.location.href='user.php'</script>\n";
}
else{
	echo "<script>alert('data gagal disimpan');
	document.location.href='edit_user.php'</script>\n";
}
 ?>