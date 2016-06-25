<?php
include('../koneksi.php');
$kode=$_POST['kode'];
$label=$_POST['label'];
$a=mysql_query("INSERT INTO `inventaris`.`detail_inventaris` (
`kd_inventaris` ,
`label_alat`
)
VALUES (
'$kode', '$label'
)"
);
?>