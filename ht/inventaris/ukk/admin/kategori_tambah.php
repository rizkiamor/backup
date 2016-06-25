<center>TAMBAH KATEGORI
<?php
@session_start();
include('../codeauto.php');
include_once('../koneksi.php');
?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Kategori</td><td>:</td><td>
   <input type="text" name="kd_kategori" id="kd_kategori" size="40" value="<?php echo kdauto("kategori","KTG");?>" disabled />
    <input type="hidden" name="kd_kategori" id="kd_kategori" size="40" value="<?php echo kdauto("kategori","KTG");?>" /></td></tr>
    <tr>
    <td> Jenis Alat</td><td>:</td><td>
    <input type="text" name="jenis" id="jenis" size="40" >
    </td>
    </tr>
   
   </tr> 
    <td></td>
<td></td>
<td>
   <input type="submit" class="button" name="tbSimpan" value="simpan" onclick="simpan_kategori();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>

</div>
