<?php
require_once"../db.php";
$kd=$_POST['kdhapus'];
$hapus=$amorpdo->prepare("DELETE FROM usulan WHERE NO_USUL='$kd'");
$hapus->execute();
?>
<?php
$status=("");
$sql_update=$amorpdo->prepare("UPDATE sd SET
            STATUS='$status'
				    WHERE NO_SD='$kd'");
$sql_update->execute();

include"kip_usulan.php";
?>
