<?php
include("../koneksi.php");
$kdhapus=$_POST['kdhapus'];
$perintah=mysql_query("DELETE FROM petugas WHERE kd_petugas='$kdhapus'");
?>
