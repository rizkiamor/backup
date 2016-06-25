<div class="col-xs-12 col-sm-12">
  <div class="input-group pull-left col-xs-12 col-sm-4">
    <span class="input-group-addon" id="cari_sama" ><i class="fa fa-search"></i></span>
    <input type="text" class="form-control" placeholder="Kelas" onkeyup="kelas_cari(this.value);" aria-describedby="basic-addon1">
  </div>
  <div class="input-group pull-right col-xs-12 col-sm-4">
    <span class="input-group-addon" id="cari_sama" ><i class="fa fa-search"></i></span>
    <input type="text" class="form-control" placeholder="Nama siswa" onkeyup="sd_cari(this.value);" aria-describedby="basic-addon1">
  </div>
<div id="aksi"></div>
<p><br><br></p>
<div class="row">
      <div class="col-xs-8 col-sm-8">
<div id="cari">
  <div class="panel panel-default">
    <div class="panel-heading">Table Siswa</div>
<table id="example1" class="table table-bordered table-striped">
<td>Nama</td><td>J_K</td><td>TGL LAHIR</td><td>NISN</td><td>KELAS</td><td>STATUS</td>
        <?php require_once"db.php";
        $pdo=$amorpdo->prepare("select*from sd ORDER BY NO_SD ASC LIMIT 30");
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
</div>
      </div>
      <div class="col-xs-4 col-sm-4">
      <div class="panel panel-default">
      <div class="panel-heading">Keterangan</div>
      <div id="lihat"></div>
      </div>
      </div>
      </div>
</div>
