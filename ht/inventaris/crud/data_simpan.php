<?php
require "../akses/conn.php";
$Nomor_masuk =$_POST['no_masuk'];
$Tanggal_masuk =$_POST['tgl_masuk'];
$Kode_barang =$_POST['Kode_barang'];
$Nomor_pembelian =$_POST['no_pembelian'];
$Jumlah =$_POST['jumlah'];
$Satuan =$_POST['satuan'];
$sql_simpan=$verlipdo->prepare("insert into  tb_sparepart_masuk(Nomor_masuk,Tanggal_masuk,Kode_barang,Nomor_pembelian,Jumlah,Satuan)
values ('$Nomor_masuk','$Tanggal_masuk','$Kode_barang','$Nomor_pembelian','$Jumlah','$Satuan')");
$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('../index.php')</script>
