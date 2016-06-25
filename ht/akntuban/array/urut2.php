<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> Pengecekan Nilai :  
<form name="form_cek" method="get" action="<?$_SERVER['PHP_SELF'];?>" >
 <input type="text" name="nilai"/> 
 <input type="submit" value="Cek" /> 
 </form> 
 </body> 
 <? $nilai = $_GET['nilai'];//mengambil nilai dari form_cek  
 //if bersarang 
 if ($nilai == 10) {      
 $keterangan = "Lulus dengan nilai sempurna"; 
}
  elseif (($nilai >= 6) && ( $nilai <= 10))  {      
  $keterangan = "Lulus"; } 
  else {      
  $keterangan = "Tidak Lulus"; } 
  echo "Nilai anda $nilai, anda dinyatakan $keterangan"; 
  ?> 
  </html> 