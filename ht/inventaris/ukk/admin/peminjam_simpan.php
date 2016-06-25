<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$karyawan=$_POST['karyawan'];
$petugas=$_POST['petugas'];
$tanggal=date('Y-m-d');

$a=mysql_query("INSERT INTO `inventaris`.`inventaris` (
`kd_inventaris` ,
`kd_karyawan` ,
`kd_petugas` ,
`tgl_pinjam`
)
VALUES (
'$kode', '$karyawan', '$petugas', '$tanggal'
)"
);

?>