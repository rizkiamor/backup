<?php
include('../koneksi.php');
$user=$_POST['user'];
$a=mysql_query("select * from petugas ");
$data=mysql_fetch_array($a);
echo $data[6];
$us=$data['user'];
if($data['user'] == $user){
	echo('username sudah ada');
}else{
	echo('user masih ada');
}
?>
