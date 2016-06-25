<?php
include('../koneksi.php');
@session_start();
$kdhapus=$_POST['kdhapus'];
$a=mysql_query("DELETE FROM alat where kd_alat='$kdhapus' ");


?>