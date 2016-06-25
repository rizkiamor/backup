Kategori tampil
<table width="91%" border="0.5" align="center" >
<tr>
<th width="20%">kode Kategori</th>
<th width="20%">Kategori Nama</th>
<th width="4%"><input name="submit" id="tutup" type="submit" value="keluar" onClick="tutup()"></th>
</tr>
<?php
include('../koneksi.php');
$cari=$_POST['wcari'];


$eksekusi=mysql_query("SELECT * FROM kategori WHERE jenis_alat LIKE '%$cari%' ORDER BY jenis_alat");

while ($data=mysql_fetch_array($eksekusi)){
	$kode=$data[0];
	$b=$data[1];
	
?>
<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $b; ?></center></td>
  <td align="center">
	<input type="image" src="../images/option.png" height="43" width="45" value="<?php echo 
$kode; ?>" alt="edit" onclick="edit_pembuat(this.value);" />
	<input type="image" src="../images/hapus.png" width="40" height="40" value="<?php echo 
$kode; ?>" alt="hapus" onclick="kategori_hapus(this.value)" />
</td>
</tr>
    </tr>
    <?
}
?>
</table>
	

