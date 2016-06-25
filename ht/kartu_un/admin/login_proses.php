<?php
@session_start();
include('../koneksi.php');
$user=$_POST['user'];
$pass=$_POST['pass'];
  if(trim($user)==""){
		  $kosong[0]="Username Harap Di Isi..!!";
		  die("username kosong <a href=\"javascript:history.back()\">kembali</a>");
	  }if(trim($pass)==""){
	      $kosong[0]="Password Harap Di Isi..!!";
		 die("password kosong <a href=\"javascript:history.back()\">kembali</a>");
	  }if(@!count($kosong)==0){
		  foreach($kosong as $index=>$tampilpesan){
			  echo "$tampilpesan<br>";
			
			  }
		  }
$q = "SELECT * FROM akun WHERE user = '$user' ";
$result = mysql_query($q);
$data = mysql_fetch_array($result);

if($pass == $data['pass']){
$_SESSION['level']=$data['hak_akses'];
$_SESSION['user']=$data['user'];
include "cek.php";
}
else {
    die("pereksoo username po passwortem salah <a href=\"javascript:history.back()\">kembali</a>");

}
?>

