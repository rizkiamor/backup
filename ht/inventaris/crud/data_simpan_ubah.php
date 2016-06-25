<?php
require"../akses/conn.php";
$ver_nis    =$_POST['ver_nis'];
$ver_nama   =$_POST['ver_nama'];
$ver_tempat =$_POST['ver_tempat'];
$ver_tgl    =$_POST['ver_tgl'];
$ver_agama  =$_POST['ver_agama'];
$ver_kelamin=$_POST['ver_kelamin'];
$ver_alamat =$_POST['ver_alamat'];
$ver_foto   =$_POST['ver_foto'];
$ver_npsn   =$_POST['ver_npsn'];
$sql_simpan=$verlipdo->prepare("UPDATE siswa SET
				nama='$ver_nama',
        tempat='$ver_tempat',
        tgl='$ver_tgl',
        agama='$ver_agama',
        kelamin='$ver_kelamin',
        alamat='$ver_alamat',
        foto='$ver_foto',
        npsn='$ver_npsn'
				WHERE nis='$ver_nis'");

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('../index.php')</script>
