<?php
if(isset($_GET['saveSiswa']))
{
	include ("Connect.php");
	$C = new Connect();
	
	$nama			=$_GET['nama'];
	$jenisKelamin	=$_GET['jenisKelamin'];
	$tempat			=$_GET['tempat'];
	$tanggalLahir	=$_GET['tanggalLahir'];
	$kelas			=$_GET['kelas'];
	$jrs		=$_GET['jrs'];
	$C->saveSiswa($nama,$jenisKelamin,$tempat,$tanggalLahir,$kelas,$jurusan);
}
?>