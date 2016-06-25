<?php
require_once"../conn.php";
$verlinpsn=$verlipdo->prepare("select * from profil ");
$verlinpsn->execute();
$verlitnpsn=$verlinpsn->fetch();
?>
<section class="col-lg-7 connectedSortable">
<div class="col-md-7">
<div class="list-group">
  <a href="#" class="list-group-item active">
  <h4>PROFIL SEKOLAH</h4>
  </a>
  <a href="#" class="list-group-item"><?php echo $verlitnpsn['nama_sekolah']; ?></a>
  <a href="#" class="list-group-item"><?php echo $verlitnpsn['instansi']; ?></a>
  <a href="#" class="list-group-item"><?php echo $verlitnpsn['alamat']; ?></a>
  <a href="#" class="list-group-item"><?php echo $verlitnpsn['npsn']; ?></a>
</div>
</div>
</section>
