<!--VERLY DELETED DATA -->
<?php
require"../akses/conn.php";
$idhapus=$_GET['idhapus'];//memanggil ID siswa
$verlihapus=$verlipdo->prepare("DELETE FROM tb_sparepart_masuk  WHERE id_siswa='$idhapus'"); //Menghapus data Siswa
$verlihapus->execute();
?>
<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('../index.php')</script>
