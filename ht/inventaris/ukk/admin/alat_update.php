<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$model=$_POST['model'];
$kategori=$_POST['kategori'];
$merk=$_POST['merk'];
$pembuat=$_POST['pembuat'];
$tanggal=$_POST['tanggal'];

mysql_query("UPDATE `inventaris`.`alat` SET `model` = '$model'
,`kd_kategori`= '$kategori', `merk`='$merk', `kd_pembuat`='$pembuat', `thn_buat`= '$tanggal'  WHERE `kd_alat` = '$kode' ");

?>