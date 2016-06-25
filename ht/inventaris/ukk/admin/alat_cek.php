 <? 
 include('../koneksi.php');
 $kd=$_POST['pembuat'];
 
 $c=mysql_query("select * from pembuat where kd_pembuat='$kd'");
	while($d=mysql_fetch_array($c)){
	?>
    
    <input type="text" value="<? echo $d[1]; ?>" />
  

	<?
	}
	?>