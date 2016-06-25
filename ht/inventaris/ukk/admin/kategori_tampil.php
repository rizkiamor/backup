<center>Kategori tampil
<table width="509" border="0.5" align="center" >
<tr>
<th width="26%">kode Kategori</th>
<th width="26%">nama Jenis</th>
<th width="24%"><input name="submit" id="tutup" type="submit" value="keluar" onClick="tutup()"></th>
</tr>
<?php
include('../koneksi.php');
$jalankan=mysql_query("SELECT * FROM kategori ORDER BY kd_kategori ASC");

while ($data=mysql_fetch_array($jalankan)){
	$kode=$data[0];
	$nama=$data[1];

$jumlah=mysql_num_rows($jalankan);
	
?>

<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $nama; ?></center></td>
   
    <td align="center">
	<input type="image" src="../images/option.png" height="43" width="45" value="<?php echo 
$kode; ?>" alt="edit" onclick="edit_pembuat(this.value);" />
	<input type="image" src="../images/hapus.png" width="40" height="40" value="<?php echo 
$kode; ?>" alt="hapus" onclick="kategori_hapus(this.value)" />
</td>
</tr>
    <td height="2"></tr>
    <?
}
?>
</table>
<table width="200" border="1">
  <tr>
    <td><center>jumlah</center></td>
     <td><center><?php echo $jumlah; ?></center></td>
  </tr>
</table>
<p>&nbsp;</p>
