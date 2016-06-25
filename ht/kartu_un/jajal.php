<table border="0" style="border:1px 1px 1px 1px;" width="40%" bgcolor="#FFFFFF" align="center">
<tr bgcolor="#FFFFFF">


</tr>
<?php
/*
SELECT tabel1.*, tabel2.*
FROM tabel1 LEFT JOIN tabel2
ON tabel1.PK=tabel2.FK;
*/
@include_once('koneksi.php');
$a=mysql_query('select A.*,B.* from data A, images B where A.no=B.no order by A.no ASC LIMIT 0,5 ');
while ($data=@mysql_fetch_array($a)){
	$no=$data['no'];
	$kode=$data['id'];
	$nama=$data['nama'];
	$ttl=$data['ttl'];
	$sekolah=$data['sekolah'];
	$rayon=$data['rayon'];
	$kepsek=$data['kepsek'];
	$nip=$data['nip'];
	$gambar=$data['image'];
?>

 <tr>
    <td >
    <table border="1" width="440" height="60">

<td width="80" height="80" ><center> <img src="gambar/E.JPG" height="70" width="70" /></center> </td>
<td height="80" width="335"><center><div>
  <b>KARTU PESERTA UJIAN NASIONAL SD / MI<br />
  <? echo $sekolah; ?> 
  <br />TAHUN PELAJARAN 2014 / 2015</b></div>
  </center></td>
<tr>  
  <td colspan="2" align="left" width="500">
  <div>
  <table border="0">
  <tr><td></td><td></td><td></td></tr>
  <tr><td>&nbsp;NO PESERTA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>:</td><td>&nbsp;<?php echo $kode; ?></td></tr><tr>
      <td>&nbsp;NAMA&nbsp;</td><td>:</td><td>&nbsp;<?php echo $nama; ?></td></tr><tr>
      <td>&nbsp;TTL&nbsp;</td><td>:</td><td>&nbsp;<?php echo $ttl; ?></td></tr><tr>
      <td>&nbsp;ASAL SEKOLAH&nbsp;</td><td>:</td><td>&nbsp;<?php echo $sekolah; ?></td></tr><tr>
      <td>&nbsp;NO RAYON&nbsp;</td><td>:</td><td>&nbsp;<?php echo $rayon; ?></td></tr>
 </table> 
 
  <table border="0">
  <td width="170" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="upload/images/<? echo $gambar; ?>" width="55" height="65" /></td>
  <td>Kepala Sekolah Penyelenggara
  <br /><br /><br /><? echo $kepsek; ?>
  <br />NIP.<? echo $nip; ?></td>
  <tr><td><td></tr>
  </table>
  </td></tr>

</table>
<br />
    
    <?php
} 
	?>    
</table>