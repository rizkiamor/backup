<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$sex=$_POST['j_kel'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$hak=$_POST['hak'];

  $query = mysql_query("update petugas set  nm_petugas='$nama',  j_kel_petugas='$sex', almt_petugas='$alamat', tlp_petugas='$telp',user='$user',password='$pass',hak_akses='$hak' where kd_petugas='$kode'");

$eksekusi=mysql_query($query);
if($eksekusi){
echo"Data Berhasil Diubah<br>";
}
else{
}
?>