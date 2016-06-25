<?php
require_once"../db.php";
 $kks   = $_POST['kks'];
 $no    = $_POST['no'];
 $jenis = $_POST['jenis'];
?>
<?php
$select=$amorpdo->prepare("select*from sd where NO_SD='$no' ");
$select->execute();
$select=$select->fetch();
$nama = $select['NAMA'];
$jkel = $select['JKEL'];
$tgl = $select['TGL'];
$nisn = $select['NISN'];
$kelas = $select['KELAS'];
$mami = $select['IBU'];
$ayah = $select['AYAH'];
?>
<?php
$status="YA";
$sql_update=$amorpdo->prepare("UPDATE sd SET
            STATUS='$status'
				    WHERE NO_SD='$no'");
$sql_update->execute();
?>
<?php
$sekolah=("SD N 3 PLAWANGAN");
$alamat_s=("Plawangan");
$kab=("Rembang");
$provinsi=("jateng");
$kab=("Rembang");
$kec=("Kragan");
$npsn=("20315623");
$ibu = $mami;
//echo '<br>'.$no.'<br>'.$nama.'<br>'.$sekolah.'<br>'.$alamat_s.'<br>'.$kec.'<br>'.$kab.'<br>'.$provinsi.'<br>'.$jkel.'<br>'.$tgl.'<br>'.$nisn.'<br>'.$npsn.'<br>'.$kelas.'<br>'.$kks.'<br>'.$ibu;
//echo '<br>'.$ayah;
$sql_simpan=$amorpdo->prepare("insert into usulan
(NO_USUL,NAMA,NAMA_SEKOLAH,ALAMAT_SEKOLAH,KECAMATAN,KABUPATEN,PROVINSI,JENIS_KELAMIN,TGL_LAHIR,NISN,NPSN,KELAS,NO_KKS,IBU,AYAH,KET)
values ('$no','$nama','$sekolah','$alamat_s','$kec','$kab','$provinsi','$jkel','$tgl','$nisn','$npsn','$kelas','$kks','$ibu','$ayah','$jenis')");
$sql_simpan->execute();
?>
<div class="alert alert-success" role="alert"><a href="javascript:void(0)" onclick="home()"><?php echo $nama; ?> Berhasil Di Usulkan .... !</a></div>
