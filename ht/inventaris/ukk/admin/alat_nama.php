<?php
include('../koneksi.php');
$cari=$_POST['wcari'];


$eksekusi=mysql_query("SELECT * FROM alat WHERE kd_pembuat LIKE '%$cari%' ORDER BY nm_pembuat");

while ($data=mysql_fetch_array($eksekusi)){
	$kode=$data[0];
	$nama=$data[1];
	
?>
<input type="text" value="<? echo $nama ?>" name="a" >
<?
}
?>