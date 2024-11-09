<?php
include "koneksi.php";
$terdafrtar_pada=$_POST['terdafrtar_pada'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$terakhir_login=$_POST['terakhir_login'];
$alamat=$_POST['alamat'];
$jens_kelamin=$_POST['jens_kelamin'];

$var_foto= "pic-".time().".jpg";
$get_foto = $_FILES['file_foto']['tmp_name'];


if (!empty($get_foto)){
	move_uploaded_file($get_foto,"images/".$var_foto); 
$query="insert into tabel_user(terdafrtar_pada,password,nama,terakhir_login,alamat,jens_kelamin,foto)
	values('$terdafrtar_pada','$password','$nama','$terakhir_login','$alamat','$jens_kelamin','$var_foto')";
	$result=mysqli_query($koneksi,$query);
	
	if($result){
		echo "<script>alert('Data berhasil disimpan');
		document.location.href='user.php'</script>\n";
	}else{
		echo "<script>alert('Data gagal simpan');
		document.location.href='input_user.phpr'</script>\n";
		
	}

}
 ?>