<?php
include "koneksi.php";

$nama_penilus=$_POST['nama_penilus'];
$tgl_lahir=$_POST['tgl_lahir'];


$var_foto= "pic-".time().".jpg";
$get_foto = $_FILES['file_foto']['tmp_name'];

if (!empty($get_foto)){
	move_uploaded_file($get_foto,"images/".$var_foto); 
	$query="insert into tabel_penulis(nama_penilus,tgl_lahir,foto)
	values('$nama_penilus','$tgl_lahir','$var_foto')";
	$result=mysqli_query($koneksi,$query);
	

	if($result){
		echo "<script>alert('Data berhasil disimpan');
		document.location.href='penulis.php'</script>\n";
	}else{
		echo "<script>alert('Data gagal simpan');
		document.location.href='input_penulis.php'</script>\n";
		
	}
}
 ?>