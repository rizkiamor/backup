<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$kota=$_POST['kota'];

echo $kode.$kota.$nama;

$a=mysql_query("UPDATE from pembuat SET nm_pembuat='$nama',kota_pembuat='$kota' where $kd_pembuat='$kode' ");

