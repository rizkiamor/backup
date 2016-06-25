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
<div id="cari">
  <div class="panel panel-default">
    <div class="panel-heading">Table Siswa</div>
<table id="example1" class="table table-bordered table-striped">
<td>Nama</td><td>Sekolah</td><td>J_K</td><td>TGL_L</td><td>NISN</td><td>NPSN</td><td>Kelas</td><td>NO KKS</td><td>IBU</td><td>AYAH</td><td>AKSI</td>
        <?php require_once"../db.php";
        $pdo=$amorpdo->prepare("select*from usulan ORDER BY NO_USUL ASC LIMIT 150");
        $pdo->execute();
        foreach ($pdo as $dkip){
        ?>
<tr>
<td><?php echo $dkip['NAMA'];?></td>
<td><?php echo $dkip['NAMA_SEKOLAH'];?></td>
<td><?php echo $dkip['JENIS_KELAMIN'];?></td>
<td><?php echo $dkip['TGL_LAHIR'];?></td>
<td><?php echo $dkip['NISN'];?></td>
<td><?php echo $dkip['NPSN'];?></td>
<td><?php echo $dkip['KELAS'];?></td>
<td><?php echo $dkip['NO_KKS'];?></td>
<td><?php echo $dkip['IBU'];?></td>
<td><?php echo $dkip['AYAH'];?></td>
<td><button class="btn btn-danger" onclick="hapus_usulan(this.value);" value="<?php echo $dkip['NO_USUL'] ?>">X</button>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
