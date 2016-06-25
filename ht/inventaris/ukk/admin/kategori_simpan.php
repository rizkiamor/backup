<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$jenis=$_POST['jenis'];

mysql_query("INSERT INTO `inventaris`.`kategori` (
`kd_kategori` ,
`jenis_alat`
)
VALUES (
'$kode', '$jenis'
)"
);
?>