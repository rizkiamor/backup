<center>EDIT KATEGORI
<?php
$kdedit=$_POST['kdedit'];
@session_start();
include_once('../koneksi.php');
$perintah=mysql_query("select * from kategori where kd_kategori='$kdedit'");
$data=mysql_fetch_array($perintah);
?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Kategori</td><td>:</td><td>
   <input type="text" name="kd_kategori" id="kd_kategori" size="40" value="<?php echo $data[0];?>" disabled />
    <input type="hidden" name="kd_kategori" id="kd_kategori" size="40" value="<?php echo $data[0];?>" /></td></tr>
    <tr>
    <td> Jenis Alat</td><td>:</td><td>
    <input type="text" name="jenis" id="jenis" size="40" value="<? echo $data[1];?>" >
    </td>
    </tr>
   
   </tr> 
    <td></td>
<td></td>
<td>
   <input type="button" class="button" name="update" value="update" onclick="update_kategori();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>

</div>
