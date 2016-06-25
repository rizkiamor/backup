<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$status=$_POST['status'];
$nama=$_POST['nama'];
$ruang=$_POST['ruang'];
$j_kel=$_POST['j_kel'];
$alamat=$_POST['alamat'];
$telpon=$_POST['telpon'];
$tanggal=date('Y-m-d');

echo $kode.$status.$nama.$ruang.$j_kel.$alamat.$telpon.$tanggal;

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

?>