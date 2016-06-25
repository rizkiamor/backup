<?php
require_once"../db.php";
echo $usul = $_POST['kdedit'];
?>
<?php
$inputa=$amorpdo->prepare("select*from inputan where KIP_A='$usul' ");
$inputa->execute();
$inputa=$inputa->fetch();
$i_kip  = $inputa['KIP_A'];
$i_nisn = $inputa['NISN'];
?>
<?php
$data=$amorpdo->prepare("select*from data_kip where KIP='$usul' ");
$data->execute();
$data=$data->fetch();
$no =$data['NO'];
$nama=$data['NAMA_SISWA'];
$tgl=$data['TANGGAL_LAHIR'];
$nisn=$data['NISN'];
$jk=$data['JENIS_KELAMIN'];
$ibu=$data['NAMA_IBU'];
$ayah=$data['NAMA_AYAH'];
$alamat=$data['ALAMAT_SEKOLAH'];
$desa=$data['DESA'];
$kabupaten=$data['KABUPATEN'];
$kks=$data['KKS'];
$kip=$data['KIP'];
$status=("YES");
?>
<?php
//$sql_update=$amorpdo->prepare("UPDATE data_kip SET
/*            NAMA_SISWA='$nama',
            TANGGAL_LAHIR='$tgl',
            NISN='$nisn',
            JENIS_KELAMIN='$jk',
            NAMA_IBU='$ibu',
            NAMA_AYAH='$ayah',
            ALAMAT_SEKOLAH='$alamat',
            DESA='$desa',
            KABUPATEN='$kabupaten',
            KKS='$kks',
            KIP='$kip',
            STATUS='$status'
				    WHERE NO='$usul'");
$sql_update->execute();*/
?>
<?php
$sekolah=("SD N 3 PLAWANGAN"); $kelas=("2");
$alamat_s=("Plawangan");
$kab=("Rembang");
$provinsi=("jateng");
$kab=("Rembang");
$kec=("Kragan");
$npsn=("1234");
//$ksimpan=$amorpdo->prepare("insert into kip(NO_KIP,NAMA_SISWA,NAMA_SEKOLAH,ALAMAT_SEKOLAH,KECAMATAN,KABUPATEN,PROVINSI,JENIS_KELAMIN,TGL_LAHIR,NISN,NPSN,KELAS,KIP,IBU,AYAH)
//values ('$usul','$nama','$sekolah','$alamat_s','$kec','$kab','$provinsi','$jk','$tgl','$nisn','$npsn','$kelas','$kip','$ibu','$ayah')");
//$ksimpan->execute();
?>
