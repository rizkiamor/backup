<center>Pembuat tampil
<table width="509" border="0.5" align="center" >
<tr>
<th width="26%">kode pembuat</th>
<th width="26%">nama pembuat</th>
<th width="24%">kota pembuat</th>
<th width="24%"><input name="submit" id="tutup" type="submit" value="keluar" onClick="tutup()"></th>
</tr>
<?php
include('../koneksi.php');
$jalankan=mysql_query("SELECT * FROM pembuat ORDER BY kd_pembuat ASC");

while ($data=mysql_fetch_array($jalankan)){
	$kode=$data[0];
	$nama=$data[1];
$kota=$data[2];
	
?>
<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $nama; ?></center></td>
    <td><center><?php echo $kota; ?></center></td>
  
  <td align="center">
	<input type="image" src="../images/option.png" height="43" width="45" value="<?php echo 
$kode; ?>" alt="edit" onclick="edit_pembuat(this.value);" />
	<input type="image" src="../images/hapus.png" width="40" height="40" value="<?php echo 
$kode; ?>" alt="hapus" onclick="hapus_pembuat(this.value)" />
</td>
</tr>
    <td height="2"></tr>
    <?
}
?>
</table>
	

