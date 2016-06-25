<?php
$uang=$_POST['uang'];
$dari=$_POST['dari'];
$ke=$_POST['ke'];
$tentukan=$_POST['tentukan'];
//array
$negara = array("IND","AUD","BND","CAD","CHF","CNY","DKK","EUR","GBP","HKD","JPY","KRW","KWD","MYR","NOK","NZD","PGK","PHP","SAR","SEK","SGD","THB","USD");
$jual = array("13500.50","9731.51","9624.55","9811.50","13435.08","2089.60","1998.98","14919.64","19761.44","1760.15","11331.02","11000.40","45208.06","3274.88","1574.93","8964.93","4613.19","28704.00","3652.74","1603.85","9624.55","38452.00","13689.00");
$beli = array("13000.50","9628.05","9526.25","9711.24","13289.86","2068.84","1978.83","14765.99","19558.33","1742.48","11213.80","11.28","44538.28","3237.70","1558.69","8870.44","4366.78","284.13.00","3614.23","1586.80","9526.25","380.27.00","13553.00");

function rupiah($nilai, $pecahan = 0) {
return number_format($nilai, $pecahan, ',', '.');}

$p_dari=$negara[("$dari")]; /**/ $p_ke=$negara[("$ke")]; /**/ //negara
$d_beli=$beli[("$dari")]; /*dari nilai beli*/ $d_jual=$beli[("$ke")]; /*ke nilai beli*/   //mata uang beli
$k_beli=$jual[("$dari")]; /*dari nilai jual*/ $k_jual=$jual[("$ke")]; /*ke nilai jual*/   //mata uang jual
$b_dari=rupiah($d_beli,2); $b_ke=rupiah($d_jual,2); 
$j_dari=rupiah($k_beli,2); $j_ke=rupiah($k_jual,2);             

echo("Nilai Dari <b>$p_dari</b> = <b>$j_dari</b>");  /**/ echo ("<br>");  // Tampilkan nilai dari harga beli
echo("Nilai Dari <b>$p_ke</b> = <b>$j_ke</b><br>");                      // Tampilkan nilai ke dari harga jual

If ($tentukan == "jual") { 
echo("Harga <b>$tentukan</b> Dari <b>$p_dari</b> = <b>$j_dari</b><br>");
$jumlah=$j_dari*$uang; $jum_tot=rupiah($jumlah,3);
echo("Hasil <b>$p_ke</b> = <b>$jum_tot</b>");
} 
else{ 
echo("Harga <b>$tentukan</b> Dari <b>$p_dari</b> = <b>$b_dari</b><br>");
$jumlah=$b_dari*$uang; $jum_tot=rupiah($jumlah,3);
echo("Hasil <b>$p_ke</b> = <b>$jum_tot</b>");
}
?>