<?php
include('../koneksi.php');
@session_start();
$kdhapus=$_POST['kdhapus'];
$a=mysql_query("DELETE FROM pembuat where kd_pembuat='$kdhapus' ");

?>