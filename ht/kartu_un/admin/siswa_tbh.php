<form enctype="multipart/form-data" action="upload.php" method="post">
<table class="datatable" align="center" border="1"> 
  <?php

@include_once('../koneksi.php');
$a=mysql_query('SELECT * FROM data ORDER BY no ASC ');
while ($data=@mysql_fetch_array($a)){
	$no=$data[0];
	$kode=$data[1];
	$nama=$data[2];
	$ttl=$data[3];
	$sekolah=$data[4];
	$rayon=$data[5];
?>
  <tr>
    <td width="200" height="37" valign="middle"><font size="2" face="verdana"><center>Pilih Foto Siswa</center></font></td>
    <td width="400"><center><input type="file" name="gambar" size="30" id="gambar" /></center></td>
<td width="80"><center>Pilih Siswa</center></td><td width="330">
 <center><input type="text" name="model" id="model" size="40" value="<? echo $nama; ?>" ></center>
    </td>   
<td width="150" ><center><input name="submit" type="submit" value="Upload" /></center></td>
<?php
}
?>
</table>
</form>

       