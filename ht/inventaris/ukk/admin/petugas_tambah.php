PETUGAS TAMBAH

<?php
include_once('../koneksi.php');
include_once('../codeauto.php');
?>
<div id="isi">
<table width="444" border="0">
<tr>
<td width="86">Kode Petugas</td>
<td width="3">:</td><td width="289">
   <input type="text" name="kd_petugas" id="kd_petugas" size="40" value="<?php echo kdauto("petugas","PTG");?>" disabled />
    <input type="hidden" name="kd_petugas" id="kd_petugas" size="40" value="<?php echo kdauto("petugas","PTG");?>" /></td></tr>
   <tr>
    <td> Nama</td>
    <td>:</td><td>
    <input type="text" name="nama" id="nama" size="40" >
    </td>
    </tr>
    <tr>
    <td> Jenis Kelamin</td>
    <td>:</td><td>
    <select name="j_kel" id="j_kel"  >
    <option>laki-laki</option>
    <option>perempuan</option>
    </select>
    </td>
    </tr>
    <tr>
    <td> Alamat</td>
    <td>:</td><td>
    <input type="text" name="alamat" id="alamat" size="40" >
    </td>
    </tr>
    <tr>
    <td> Telpon</td>
    <td>:</td><td>
    <input type="text" name="telpon" id="telpon" size="40" >
        </td>
    </tr>
    <tr>
    <td>Username</td>
    <td>:</td><td>
    <input type="text" name="user" id="user" size="40" ></td>
    </tr>
    <tr>
    <td> Password</td>
    <td>:</td><td>
    <input type="text" name="pass" id="pass" size="40" >
    </td>
    </tr>
    
     <tr>
    <td> Hak Akses</td>
    <td>:</td><td>
    <select name="telp" id="hak"  >
   <option>admin</option>
   <option>petugas</option>
    </select>
    </td>
    </tr>
    
    <td></td>
<td></td>
<td>
  <input type="submit" class="button" name="tbSimpan" value="simpan" onclick="simpano();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>
</div>