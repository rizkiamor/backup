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

$a=mysql_query("INSERT INTO  `inventaris`.`petugas` (
`kd_petugas` ,
`nm_petugas` ,
`j_kel_petugas` ,
`almt_petugas` ,
`tlp_petugas` ,
`user` ,
`password` ,
`hak_akses`
)
VALUES (
'$kode',  '$nama',  '$sex',  '$alamat',  '$telp',  '$user', '$pass'  ,  '$hak'
)"
);



?>