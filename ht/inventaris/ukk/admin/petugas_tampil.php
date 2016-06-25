<style type="text/css">
body,td,th {
	font-size: 12px;
}
</style>
Petugas tampil

<table border="0.5" align="center">
  <tr>
<th width="8%">kd_petugas</th>
<th width="8%">nama</th>
<th width="8%">J_kelamin</th>
<th width="8%">alamat</th>
<th width="8%">telpon</th>
<th width="8%">user</th>
<th width="8%">password </th>
<th width="10%">hak</th>
<th width="4%"><input name="submit" id="tutup" type="submit" value="keluar" onClick="tutup()"></th>
</tr>
<?php
include('../koneksi.php');
$jalankan=mysql_query("SELECT * FROM petugas ORDER BY kd_petugas ASC");

while ($data=mysql_fetch_array($jalankan)){
$kode=$data[0];
$nama=$data[1];
$sex=$data[2];
$alamat=$data[3];
$telp=$data[4];
$user=$data[5];
$pass=$data[6];	
$hak=$data[7];
?>
<tr>
    <td><center><?php echo $kode; ?></center></td>
    <td><center><?php echo $nama; ?></center></td>
    <td><center><?php echo $sex; ?></center></td>
    <td><center><?php echo $alamat; ?></center></td>
     <td><center><?php echo $telp; ?></center></td>
      <td><center><?php echo $user; ?></center></td>
       <td><center><?php echo $pass; ?></center></td>
        <td><center><?php echo $hak; ?></center></td>
  <td align="center">
	<input type="image" src="../images/option.png" height="43" width="45" value="<?php echo 
$kode; ?>" alt="edit" onclick="edit(this.value);" />
	<input type="image" src="../images/hapus.png" width="40" height="40" value="<?php echo 
$kode; ?>" alt="hapus" onclick="hapus(this.value)" />
</td>
</tr>
    </tr>
    <?
}
?>
</table>
	

