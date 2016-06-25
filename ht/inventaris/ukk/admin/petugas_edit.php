PETUGAS EDIT

<?php
include_once('../koneksi.php');
$kdedit=$_POST['kdedit'];
$perintah=mysql_query("select * from petugas where kd_petugas='$kdedit' ");
$data=mysql_fetch_array($perintah);
?>
<div id="isi">
<table border="0">
<tr>
<td>Kode Petugas</td>
<td>:</td><td>
   <input type="text" name="kd_petugas" id="kd_petugas" size="40" value="<?php echo $data[0];?>" disabled />
    <input type="hidden" name="kd_petugas" id="kd_petugas" size="40" value="<?php echo $data[0];?>" /></td></tr>
   <tr>
    <td> Nama</td>
    <td>:</td><td>
    <input type="text" name="nama" id="nama" size="40"  value="<? 
echo $data[1];	?>">
    </td>
    </tr>
    <tr>
    <td> Jenis Kelamin</td>
    <td>:</td><td>
    <select name="sex" id="sex"  >
    <option value="<? echo $data[2]; ?>">laki-laki</option>
       <option>perempuan</option>
    </select>
    </td>
    </tr>
    <tr>
    <td> Alamat</td>
    <td>:</td><td>
    <input type="text" name="alamat" id="alamat" size="40" value="<? echo $data[3]; ?>" >
    </td>
    </tr>
    <tr>
    <td> Telpon</td>
    <td>:</td><td>
    <input type="text" name="telpon" id="telpon" size="40" value="<? echo $data[4]; ?>" >
        </td>
    </tr>
    <tr>
    <td>Username</td>
    <td>:</td><td>
    <input type="text" name="user" id="user" size="40" value="<? echo $data[5]; ?>">
    </td>
    </tr>
    
    <tr>
    <td> Password</td>
    <td>:</td><td>
    <input type="text" name="pass" id="pass" size="40" value="<? echo $data[6]; ?>">
    </td>
    </tr>
    
     <tr>
    <td> Hak Akses</td>
    <td>:</td><td>
    <select name="telp" id="hak"  >
   <option><? echo $data[7]; ?> </option>
   <option>admin</option>
   <option>petugas</option>
    </select>
    </td>
    </tr>
    
    <td></td>
<td></td>
<td>
  <input type="submit" class="button" name="tbSimpan" value="update" onclick="update();" />
  <input type="button" class="button" name="tbTutup" value="tutup" onclick="tutupForm();" />
</td></tr>
</table>
</div>