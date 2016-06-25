<?php
/*
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x <  $arrlength; $x++) {
     echo $cars[$x];
     echo "<br>";
}
?>

<?
$negara = array("AUD","BND","CAD","CHF","CNY","DKK","EUR","GBP","HKD","JPY","KRW","KWD","MYR","NOK","NZD","PGK","PHP","SAR","SEK","SGD","THB","USD");
$jual = array("9,731.51","9,624.55","9,811.50","13,435.08","2,089.60","1,998.98","14,919.64","19,761.44","1,760.15","11,331.02","11.40","45,208.06","3,274.88","1,574.93","8,964.93","4,613.19","287.04.00","3,652.74","1,603.85","9,624.55","384.52.00","13,689.00");
$beli = array("9,628.05","9,526.25","9,711.24","13,289.86","2,068.84","1,978.83","14,765.99","19,558.33","1,742.48","11,213.80","11.28","44,538.28","3,237.70","1,558.69","8,870.44","4,366.78","284.13.00","3,614.23","1,586.80","9,526.25","380.27.00","13,553.00");
for($x = 0; $x )
/////
$fruit = array("Apple","Orange","Banana","Grape", "Cherry","Peach");
$numElements = count($fruit);
for($x = 0; $x < $numElements; $x++) echo "{$fruit[$x]} "; 
*/



$bulan=array("januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember");
$bulan_ini=$bulan[date("m")-1];
echo("saat ini adalah bulan <b>$bulan_ini</b>");
$tgl=date('m');
echo"$tgl";    



/*

   $nama_hari = array('minggu','senin','selasa','rabu','kamis','jumat','sabtu');

   //lakukan perulangan
   $c=1;
   foreach($nama_hari as $hari)
   {

      echo "Hari ke $c ". $hari ."";
      $c++;
   }
*/
/*
$perusahaan = array(
                      'AUTO'=>array('name'=>'Astra Otoparts','location'=>'Kelapa Gading, DKI Jakarta'),
                      'GDG'=>array('name'=>'Gudang Garam ','location'=>'Kediri , Jawa Timur'),
                      'BCA'=>array('name'=>'PT. Bank Central Asia','location'=>'Jakarta Pusat, DKI Jakarta')
                      );

   //lakukan perulangan
   $c=1;
   foreach($perusahaan as $key => $val)
   {
     echo "Nama Perushaan ke $c ". $val['name'] .""; $c++;
     echo "lokasi perusahaan $c ". $val['location'].""; $c++;
   }
*/

?>