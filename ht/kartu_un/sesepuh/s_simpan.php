<?php
include('koneksi.php');
$kode=$_POST['kode'];
$model=$_POST['model'];
$kategori=$_POST['kategori'];
$merk=$_POST['merk'];
$pembuat=$_POST['pembuat'];

echo $kode.$model.$kategori.$merk;
/*
$a=mysql_query("INSERT INTO `inventaris`.`karyawan` (
`kd_karyawan` ,
`status` ,
`nm_karyawan` ,
`ruang` ,
`tgl_daftar` ,
`j_kel` ,
`almt_karyawan` ,
`tlp_karyawan`
)
VALUES (
'$kode', '$status', '$nama', '$ruang', '$tanggal', '$j_kel', '$alamat', '$telpon'
)");
*/
?>