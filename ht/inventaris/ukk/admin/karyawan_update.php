<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$status=$_POST['status'];
$nama=$_POST['nama'];
$ruang=$_POST['ruang'];
$j_kel=$_POST['j_kel'];
$alamat=$_POST['alamat'];
$telpon=$_POST['telpon'];

mysql_query("UPDATE `inventaris`.`karyawan` SET `status` = '$status', `nm_karyawan` = '$nama', `ruang` = '$ruang', `j_kel` = '$j_kel', `almt_karyawan` = '$alamat', `tlp_karyawan` = '$telpon'
 WHERE `kd_karyawan` = '$kode' "); 



?>