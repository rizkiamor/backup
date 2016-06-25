<div class="col-xs-12 col-sm-12">
  <div class="input-group pull-right col-xs-12 col-sm-4">
    <span class="input-group-addon" id="cari_sama" ><i class="fa fa-search"></i></span>
    <input type="text" class="form-control" placeholder="Nama siswa" onkeypress="siswa_cari(this.value);" aria-describedby="basic-addon1">
  </div>
<div id="aksi"></div>
<p><br><br></p>
<div id="cari">
  <div class="panel panel-default">
    <div class="panel-heading">Table Siswa Kip</div>
<table id="example1" class="table table-bordered table-striped">
<td>Nama</td><td>TGL LAHIR</td><td>NISN</td><td>J KEL</td><td>IBU</td><td>AYAH</td><td>ALAMAT</td><td>DESA</td><td>KAB</td><td>KKS</td><td>KIP</td><td>KET</td>
        <?php require_once"db.php";
        $pdo=$amorpdo->prepare("select*from data_kip ORDER BY NO ASC LIMIT 30");
        $pdo->execute();
        foreach ($pdo as $dkip){
        ?>
<tr>
<td><?php echo $dkip['NAMA_SISWA']; ?></td>
<td><?php echo $dkip['TANGGAL_LAHIR']; ?></td>
<td><?php echo $dkip['NISN']; ?></td>
<td><?php echo $dkip['JENIS_KELAMIN']; ?></td>
<td><?php echo $dkip['NAMA_IBU']; ?></td>
<td><?php echo $dkip['NAMA_AYAH']; ?></td>
<td><?php echo $dkip['ALAMAT_SEKOLAH']; ?></td>
<td><?php echo $dkip['DESA']; ?></td>
<td><?php echo $dkip['KABUPATEN']; ?></td>
<td><?php echo $dkip['KKS']; ?></td>
<td><?php echo $dkip['KIP']; ?></td>
<td><?php
$status=$dkip['STATUS'];
$no = $dkip['KIP'];
if($status==null){
  echo '<button type="button" class="btn btn-danger" value="'.$no.'" onclick="usul_kip(this.value);">usul</button>';
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
</div>
