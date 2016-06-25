<?php
include"koneksi.php";
?>
<link href="style.css" rel="stylesheet" type="text/css" />

<table width="396" border="0" id="eed" align="center">
  <tr background="image/atas.jpg">
    <td width="24" align="center">No.</td>
    <td width="92" align="center">Label Alat</td>
    <td width="97" align="center">Model Alat</td>
    <td width="111" align="center">Merek Alat</td>
    <td width="50" align="center">Aksi</td>
  </tr>
  <?php
  $kode=$_POST['kode'];
  //$qry=mysql_query("SELECT * FROM detail_inventaris WHERE kode_inventaris='$kode' ORDER BY kode_inventaris ASC")or die(mysql_error());
  $qry=mysql_query("SELECT A.*, B.*, C.* FROM detail_inventaris A, label_alat B, tb_alat C WHERE A.label_alat=B.label_alat AND B.kode_alat=C.kode_alat AND kode_inventaris='$kode' ORDER BY kode_inventaris ASC")or die(mysql_error());
  while($data=mysql_fetch_array($qry)){
  $no++;
  ?>
  <tr class="tabel">
    <td><?php echo $no; ?></td>
    <td><?php echo $data['label_alat']; ?></td>
    <td><?php echo $data['model']; ?></td>
    <td><?php echo $data['merek']; ?></td>
    <td align="center">
    <input class="button" type="image" src="image/copy.png" value="<?php echo $data[1]; ?>" alt="hapus" onclick="hapus(this.value)" />
    </td>
  </tr>
  <?php
  }
  ?>
</table>