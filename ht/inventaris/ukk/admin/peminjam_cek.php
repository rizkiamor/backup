
<?php
include('../koneksi.php');
$jalankan=mysql_query("SELECT * FROM label_alat ORDER BY label_alat ASC");

while ($data=mysql_fetch_array($jalankan)){
$kode=$data[0];
	 $b=$data[1];
	 $alat=('a');
?>
<?
if('$alat' == '$kode'){
	echo('data ada');
}
else
{
	echo('data bisa');
}
?>

<?
}
?>
