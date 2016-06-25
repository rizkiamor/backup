<center>TAMBAH PEMBUAT
<?php
@session_start();
include('../codeauto.php');
include_once('../koneksi.php');
?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Pembuat</td><td>:</td><td>
   <input type="text" name="kd_pembuat" id="kd_pembuat" size="40" value="<?php echo kdauto("pembuat","PMB");?>" disabled />
    <input type="hidden" name="kd_pembuat" id="kd_pembuat" size="40" value="<?php echo kdauto("pembuat","PMB");?>" /></td></tr>
    <tr>
    <td> Nama Pembuat</td><td>:</td><td>
    <input type="text" name="nm_pembuat" id="nm_pembuat" size="40" >
    </td>
    </tr>
    <tr>
    <td> Kota Pembuat</td><td>:</td><td>
    	 <input type="text" name="kota_pembuat" id="kota_pembuat" size="40" >
   </td>
   </tr> 
    <td></td>
<td></td>
<td>
   <input type="submit" class="button" name="tbSimpan" value="simpan" onclick="simpan_pembuat();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>

</div>
