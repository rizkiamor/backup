<div class="panel panel-default">
  <div class="panel-heading">Table Siswa</div>
<table id="example1" class="table table-bordered table-striped">
<td>Nama</td><td>J_K</td><td>TGL LAHIR</td><td>NISN</td><td>KELAS</td><td>STATUS</td>
      <?php require_once"../db.php";  $cari = $_POST['kdedit'];
      $pdo=$amorpdo->prepare("select*from sd where NAMA LIKE '%$cari%'");
      $pdo->execute();
      foreach ($pdo as $dkip){
      ?>
<tr>
<td><?php echo $dkip['NAMA']; ?></td>
<td><?php echo $dkip['JKEL']; ?></td>
<td><?php echo $dkip['TGL']; ?></td>
<td><?php echo $dkip['NISN']; ?></td>
<td><?php echo $dkip['KELAS']; ?></td>
<td><?php
$status=$dkip['STATUS'];
$no = $dkip['NO_SD'];
if($status==null){
echo '<button type="button" class="btn btn-danger" value="'.$no.'" onclick="usul_kks(this.value);">usul</button>';
}else {
echo '<button type="button" class="btn btn-success">sudah</button>';
}
?></td>
</tr>
<?php } ?>
</table>
</div>
