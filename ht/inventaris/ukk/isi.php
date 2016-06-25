<?php
switch($_GET['menu']){
case 'home' :include('utama_home.php');break;
case 'alat' :include('alat.php');break;
case 'pembuat' :include('pembuat.php');break;
case 'petugas' :include('petugas.php');break;
case 'kategori' :include('kategori.php');break;
case 'karyawan' :include('karyawan.php');break;
case 'peminjam' :include('pinjam.php');break;
case 'pengembalian' :include('pengembalian.php');break;
default :include('utama_home.php');break;
}
?>