<center>TAMBAH EDIT
<?php
@session_start();
include('../codeauto.php');
include_once('../koneksi.php');
$kdedit=$_POST['kdedit'];
$jalankan=mysql_query("SELECT * FROM pembuat WHERE kd_pembuat='$kdedit'");

while ($data=mysql_fetch_array($jalankan)){
	
?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Pembuat</td><td>:</td><td>
   <input type="text" name="kd_pembuat" id="kd_pembuat" size="40" value="<?php echo $data[0];?>" disabled />
    <input type="hidden" name="kd_pembuat" id="kd_pembuat" size="40" value="<?php echo $data[0];?>" /></td></tr>
    <tr>
    <td> Nama Pembuat</td><td>:</td><td>
    <input type="text" name="nm_pembuat" id="nm_pembuat" size="40" value="<? echo $data[1]; ?>">
    </td>
    </tr>
    <tr>
    <td> Kota Pembuat</td><td>:</td><td>
    	 <input type="text" name="kota_pembuat" id="kota_pembuat" size="40"  value="<? echo $data[2]; ?>">
   </td>
   </tr> 
    <td></td>
<td></td>
<td>
   <input type="button" class="button" name="tbSimpan" value="update" onclick="update();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>

</div>
<?
}
?>
