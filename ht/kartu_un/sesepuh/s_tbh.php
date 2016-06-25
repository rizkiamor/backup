
TAMBAH KARYAWAN
<?php
include_once('koneksi.php');
include('codeauto.php');?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Admin</td><td>:</td><td>
   <input type="text" name="admin" id="admin" size="40" value="<?php echo kdauto("akun","ADMIN");?>" disabled />
    <input type="hidden" name="admin" id="admin" size="40" value="<?php echo kdauto("akun","ADMIN");?>" /></td></tr>
   <tr>
    <td> Username</td><td>:</td><td>
    <input type="text" name="user" id="user" size="40" >
    </td>
    </tr>
    <tr>
    <td> Password</td><td>:</td><td>
    <input type="text" name="pass" id="pass" size="40" >
    </td>
    </tr>
    <tr>
    <td> Sekolahan</td><td>:</td><td>
     <select name="sekolahan" id="sekolahan" ><br />
<option>------------------------Pilih Sekolahan-------------------------</option>
<option>SDN1</option>
<option>SDN2</option>
</select>
    </td>
    </tr>
    <tr>
    <td> Jenis Akses</td><td>:</td><td>
 <select name="akses" id="akses" ><br />
<option>------------------------Pilih Hak Akses------------------------</option>
<option>admin</option>
<option>user</option>
</select>
    </td>
    </tr>
    <tr>
    
    <td></td>
<td></td>
<td>
  <input type="button" class="button" name="tbSimpan" value="simpan" onclick="simpan_s();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>
</div>
