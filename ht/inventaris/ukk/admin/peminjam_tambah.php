<center>Tambah Peminjam
<?php
@session_start();
include('../codeauto.php');
include_once('../koneksi.php');
$kok=$_SESSION['user'];
$pet=mysql_query("select * from petugas where user='$kok' ");
$kod=mysql_fetch_array($pet);

?><table border="0">
<tr>
<td>Kode Inventaris</td>
<td>:</td><td>
   <input type="text" name="kd_inventaris" id="kd_inventaris" size="40" value="<?php echo kdauto("inventaris","INVE");?>" disabled />
    <input type="hidden" name="kd_inventaris" id="kd_inventaris" size="40" value="<?php echo kdauto("inventaris","INVE");?>" /></td></tr>
    <tr>
    <td>Kode Karyawan</td>
    <td>:</td><td>
    <select name="kd_kar" id="kd_kar"  >
    <?php
	$a=mysql_query("select * from karyawan order by kd_karyawan");
	while($b=mysql_fetch_array($a)){
	?>
    <option value="<?php echo $b[0]; ?>"><? echo $b[0]; ?></option>
    <?
	}
	?>
    </select>
    </td>
    </tr>
     <tr>
    <td>Kode Petugas</td>
    <td>:</td><td>
  <input type="text" name="petugas" id="petugas" size="40" value="<? echo $kod[0]; ?>">
    </td>
    </tr>
     <tr>
    <td>Label Alat</td>
    <td>:</td><td>
  <select name="label" id="label">
  <?php
  $c=mysql_query("select * from label_alat order by label_alat");
	while($d=mysql_fetch_array($c)){
	?>
    <option><? echo $d[0]; ?></option>
    <?
	}
	?>
    </select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td>  </td><td>
    
    <tr>
    </tr> 
    <td></td>
<td></td>
<td>

<input type="button" class="button" name="tb" value="+" onclick="proses();" />
   <input type="submit" class="button" name="tbSimpan" value="proses" onclick="simpan_peminjam();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>
