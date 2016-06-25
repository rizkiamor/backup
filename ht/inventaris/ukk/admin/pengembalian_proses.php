<?php
include('../koneksi.php');
$kembali=$_POST['kembali'];
$tanggal=date('Y-m-d');
$a=mysql_query("INSERT INTO pengembalian where kd_inventaris='$kembali'");
?>