<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Tanggal : 
<select name="tanggal">
<?php
	for($t=1; $t<32; $t++)
	print_r ("<option value=$t>$t</option>");
?>
</select>
Bulan : 
<select name="bulan">
<?php
	for($b=1; $b<=12; $b++)
	print_r ("<option value=$b>$b</option>");
?>
</select>
Tahun : 
<select>
<?php
	for($ta=1980; $ta<=2016; $ta++)
	print_r ("<option value=$ta>$ta</option>");
?>
</select>
</body>
</html>