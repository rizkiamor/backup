
TAMBAH KARYAWAN
<?php
include_once('../koneksi.php');
include('../codeauto.php');
$kdedit=$_POST['kdedit'];
$perintah=mysql_query("select * from karyawan where kd_karyawan='$kdedit'");
$data=mysql_fetch_array($perintah);
?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Karyawaan</td><td>:</td><td>
   <input type="text" name="kd_karyawan" id="kd_karyawan" size="40" value="<?php echo $data[0];?>" disabled />
    <input type="hidden" name="kd_karyawan" id="kd_karyawan" size="40" value="<?php echo $data[0];?>" /></td></tr>
   <tr>
    <td> Status</td><td>:</td><td>
    <input type="text" name="status" id="status" size="40" value="<? echo $data[1]; ?>">
    </td>
    </tr>
    <tr>
    <td> Nama Karyawan</td><td>:</td><td>
    <input type="text" name="nama" id="nama" size="40" value="<?  
echo $data[2];	?>">
    </td>
    </tr>
    <tr>
    <td> Ruang</td><td>:</td><td>
    <input type="text" name="ruang" id="ruang" size="40" value="<? echo $data[3];?>" >
    </td>
    </tr>
    <tr>
    <td> Jenis Kelamin</td><td>:</td><td>
 <select name="j_kel" id="j_kel" ><br />
<option value="<? echo $data[4]; ?>">laki-laki</option>
<option>perempuan</option>
</select>
    </td>
    </tr>
    <tr>
    <td> Alamat Karyawan</td><td>:</td><td>
    <input type="text" name="alamat" id="alamat" size="40" value="<? echo $data[5]; ?>">
    </td>
    </tr>
    
    <tr>
    <td> Telp Karyawan</td><td>:</td><td>
    <input type="text" name="telp" id="telp" size="40" value="<? echo $data[6];?>" >
    </td>
    </tr>
    
    <td></td>
<td></td>
<td>
  <input type="button" class="button" name="tbSimpan" value="simpan" onclick="update();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>
</div>
