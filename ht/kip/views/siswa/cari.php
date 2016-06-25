<div class="panel panel-default">
  <div class="panel-heading">Table Siswa</div>
 <table id="example1" class="table table-bordered table-striped">
 <td>Nama</td><td>TGL LAHIR</td><td>NISN</td><td>J KEL</td><td>IBU</td><td>AYAH</td><td>ALAMAT</td><td>DESA</td><td>KAB</td><td>KKS</td><td>KIP</td><td>KET</td>
         <?php require_once"../db.php"; $cari = $_POST['kdedit'];
         $pdo=$amorpdo->prepare("select*from data_kip where NAMA_SISWA LIKE '%$cari%'");
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
 <td>
   <?php
   $status=$dkip['STATUS'];
   $no = $dkip['KIP'];
   if($status==null){
     echo '<button type="button" class="btn btn-danger" value="'.$no.'" onclick="usul_kip(this.value);">usul</button>';
   }else {
     echo '<button type="button" class="btn btn-success">sudah</button>';
   }
   ?>
 </td>
 </tr>
 <?php } ?>
 </table>
</div>
