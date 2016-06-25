<?php
include_once('../koneksi.php');
?>
<?php
$kode=$_POST['kode'];
$jenis=$_POST['jenis'];
                 

mysql_query("UPDATE `inventaris`.`kategori` SET `jenis_alat` = '$jenis' WHERE `kd_kategori` = '$kode' "); 

?>