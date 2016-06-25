<center>Pengembalian Dipinjam
<table width="509" border="0.5" align="center" >
<tr>
<th width="26%">kode inventaris</th>
<th width="26%">kode karyawan</th>
<th width="26%">tgl pinjam</th>
<th width="26%">label alat</th>

</tr>
<?php
include('../koneksi.php');
$jalankan=mysql_query("select A.*,B.* from detail_inventaris A, inventaris B where A.kd_inventaris=B.kd_inventaris  ");

while ($data=mysql_fetch_array($jalankan)){
	$kode=$data['kd_inventaris'];
	$nama=$data['kd_karyawan'];
	$kar=$data['tgl_pinjam'];
	$ka=$data['label_alat'];

$jumlah=mysql_num_rows($jalankan);
?>
<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $nama; ?></center></td>
    <td><center><?php echo $kar; ?></center></td>
     <td><center><?php echo $ka; ?></center></td>
   
  
</tr>
    <td height="2"></tr>
    <?
}
?>
</table>

