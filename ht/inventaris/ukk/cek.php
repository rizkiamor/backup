<?php
include('koneksi.php');
@session_start();
if(isset($_SESSION['level'])){
	
	if($_SESSION['level']== "admin") {
		header("location:admin/index.php");
	}
	if($_SESSION['level'] == "petugas") {
		header("location:petugas/index.php");
	}
}
	if(!isset($_SESSION['level'])){
		header("location:index.php");
}
?>