<center>Alat Tampil

<table width="707" border="0.5" align="center" >
<tr>
<th width="15%">kode alat </th>
<th width="15%">model</th>
<th width="15%">kode kategori</th>
<th width="15%">merk</th>
<th width="15%">kode pembuat</th>
<th width="15%">tahun buat</th>
<th width="15%"><input name="submit" id="tutup" type="submit" value="keluar" onClick="tutup()"></th>
</tr>
<?php
include('../koneksi.php');
$jalankan=mysql_query("SELECT * FROM alat ORDER BY kd_alat ASC");

while ($data=mysql_fetch_array($jalankan)){
	$kode=$data[0];
	$model=$data[1];
$kategori=$data[2];
$merk=$data[3];
$pembuat=$data[4];
$tahun=$data[5];
	
?>
<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $model; ?></center></td>
    <td><center><?php echo $kategori; ?></center></td>
     <td><center><?php echo $merk; ?></center></td>
      <td><center><?php echo $pembuat; ?></center></td>
       <td><center><?php echo $tahun; ?></center></td>
  
  <td align="center">
	<input type="image" src="../images/option.png" height="43" width="45" value="<?php echo 
$kode; ?>" alt="edit" onclick="edit(this.value);" />
	<input type="image" src="../images/hapus.png" width="40" height="40" value="<?php echo 
$kode; ?>" alt="hapus" onclick="hapus_pembuat(this.value)" />
</td>
</tr>
    <td height="2"></tr>
    <?
}
?>
</table>
	

