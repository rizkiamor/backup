<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$model=$_POST['model'];
$kategori=$_POST['kategori'];
$merk=$_POST['merk'];
$pembuat=$_POST['pembuat'];
$tanggal=$_POST['tahun'];
$a=mysql_query("INSERT INTO `inventaris`.`alat` (
`kd_alat` ,
`model` ,
`kd_kategori` ,
`merk` ,
`kd_pembuat` ,
`thn_buat`
)
VALUES (
'$kode', '$model', '$kategori', '$merk', '$pembuat', '$tanggal'
)"
);

mysql_query("INSERT INTO `inventaris`.`label_alat` (
`label_alat` ,
`kd_alat`
)
VALUES (
'$kode', '$model'
)"
);

?>