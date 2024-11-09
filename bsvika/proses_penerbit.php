

<?php
include "koneksi.php";
$id_penerbit=$_POST['id_penerbit'];
$nama_penerbit=$_POST['nama_penerbit'];
$kota_penerbit=$_POST['kota_penerbit'];
$query="insert into tabel_penerbit(id_penerbit,nama_penerbit,kota_penerbit)
  values('$id_penerbit','$nama_penerbit','$kota_penerbit')";
  $result=mysqli_query($koneksi,$query);
  if($result){
    echo "<script>alert('Data berhasil disimpan');
    document.location.href='penerbit.php'</script>\n";
  }
  else{
    echo "<script>alert('Data gagal simpan');
    document.location.href='input_penerbit.php'</script>\n";
    
  }
 ?>