TAMPIL KARYAWAN
<table width="707" border="0.5" align="center" >
<tr>
<th width="15%">kode karyawan </th>
<th width="15%">status</th>
<th width="15%">Nama Karyawan</th>
<th width="15%">Ruang</th>
<th width="15%">Tgl Daftar</th>
<th width="15%">J Kel</th>
<th width="15%">Alamat</th>
<th width="15%">Telpon</th>
<th width="15%"><input name="submit" id="tutup" type="submit" value="keluar" onClick="tutup()"></th>
</tr>
<?php
include('../koneksi.php');
$jalankan=mysql_query("SELECT * FROM karyawan ORDER BY kd_karyawan ASC");

while ($data=mysql_fetch_array($jalankan)){
	$kode=$data[0];
	$status=$data[1];
	$nama=$data[2];
	$ruang=$data[3];
	$tgl=$data[4];
	$jkel=$data[5];
	$alamat=$data[6];
	$telp=$data[7];
	
?>
<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $status; ?></center></td>
     <td><center><?php echo $nama; ?></center></td>
    <td><center><?php echo $ruang; ?></center></td>
     <td><center><?php echo $tgl; ?></center></td>
      <td><center><?php echo $jkel; ?></center></td>
      <td><center><?php echo $alamat; ?></center></td>
       <td><center><?php echo $telp; ?></center></td>
  
  <td align="center">
	<input type="image" src="../images/option.png" height="43" width="45" value="<?php echo 
$kode; ?>" alt="edit" onclick="edit_kar(this.value);" />
	<input type="image" src="../images/hapus.png" width="40" height="40" value="<?php echo 
$kode; ?>" alt="hapus" onclick="hapus(this.value)" />
</td>
</tr>
    <td height="2"></tr>
    <?
}
?>
</table>
	