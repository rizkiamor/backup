<?php
include('koneksi.php');
function kdauto($akun, $AKUN){
$struktur   = mysql_query("SELECT * FROM $akun");
$field      = mysql_field_name($struktur,0);
$panjang    = mysql_field_len($struktur,0);
 
$qry  = mysql_query("SELECT max(".$field.") FROM ".$akun);
$row  = mysql_fetch_array($qry);
if ($row[0]=="") {
$angka=0;
}
else {
$angka= substr($row[0], strlen($AKUN));
}
$angka++;
$angka      =strval($angka);
$tmp  ="";
for($i=1; $i<=($panjang-strlen($AKUN)-strlen($angka)); $i++) {
$tmp=$tmp."0";
}
return $AKUN.$tmp.$angka;
}
?>
