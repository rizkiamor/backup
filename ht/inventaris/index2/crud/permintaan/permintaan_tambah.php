    <?php require_once"../conn.php";?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
          <li class="active">User</li>
        </ol>
      </section>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><b>Form User</b></div>
      <button type="button" class="btn btn-danger pull-right" onclick="user_tam()" >+</button>
      <table class="table">
        <tr><td><center><b>Kode Barang</b></td><td><center><b>Nama Barang</b></td><td><center><b>Jumlah</b></td><td><center><b>Satuan</b></td></center>
        <td><center><b>Proses</b></td></center></tr>
<td>
<select class="form-control" id="kode">
  <?php $pdo=$saripdo->prepare("select*from tb_sparepart");
        $pdo->execute(); foreach ($pdo as $pdo){ ?>
<option value="<?php echo $pdo['Kode_barang'];?>"><?php echo $pdo['Kode_barang'];?></option>
<?php } ?></select>
</td>
<td>
<select class="form-control" id="nama" onkeypres="permintaan_tam(this.value)" >
  <?php $pdo=$saripdo->prepare("select*from tb_sparepart");
        $pdo->execute(); foreach ($pdo as $pdo){ ?>
<option value="<?php echo $pdo['Nama_barang'];?>"><?php echo $pdo['Nama_barang'];?></option>
<?php } ?></select>
</td>
<td><input type="text" class="form-control" id="jumlah"></td>
<td><input type="hiden" class="form-control" id="satuan"></td>
<td><button type="button" class="btn btn-danger"  onclick="user_hapus(this.value);" value="<?php echo $tampil['username'] ?>">Kirim</button></td>
