<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$kota=$_POST['kota'];

$a=mysql_query("INSERT INTO `inventaris`.`pembuat` (
`kd_pembuat` ,
`nm_pembuat` ,
`kota_pembuat`
)
VALUES (
'$kode', '$nama', '$kota'
)");

