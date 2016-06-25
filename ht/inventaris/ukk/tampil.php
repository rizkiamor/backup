<center>Kategori tampil
<table width="509" border="0.5" align="center" >
<tr>
<th width="26%">a</th>
<th width="26%">b</th>

</tr>
<?php
include('koneksi.php');
$jalankan=mysql_query("select A.*,B.*,C.* from petugas A, alat B, karyawan C ");

while ($data=mysql_fetch_array($jalankan)){
	$kode=$data['almt_petugas'];
	$nama=$data['merk'];
	$kar=$data['kd_karyawan'];

$jumlah=mysql_num_rows($jalankan);
	
?>

<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $nama; ?></center></td>
    <td><center><?php echo $kar; ?></center></td>
   
  
</tr>
    <td height="2"></tr>
    <?
}
?>
</table>
<p>&nbsp;</p>
