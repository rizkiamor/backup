<?php
include("Connect.php");
$C = new Connect();
$C->connect();
?>
<html>
<head>
	<title>bismillah</title>
</head>
<body>
	<form action="action.php" method="get">
	<table>
		<tr>
			<td>nama</td>
			<td><input type="text" value="" name="nama"></td>
		</tr>
		<tr>
			<td>jk</td>
			<td><input type="text" value="" name="jenisKelamin"></td>
		</tr>
		<tr>
			<td>t4</td>
			<td><input type="text" value="" name="tempat"></td>
		</tr>
		<tr>
			<td>tgl</td>
			<td><input type="text" value="" name="tanggalLahir"></td>
		</tr>
		<tr>
			<td>kls</td>
			<td><input type="text" value="" name="kelas"></td>
		</tr>
		<tr>
			<td>jrs</td>
			<td><input type="text" value="" name="jrs"></td>
		</tr>
		<tr>
			<td><input type="submit" value="SAVE" name="saveSiswa"></td>
		</tr>
	</table>
	</form>
</body>
</html>