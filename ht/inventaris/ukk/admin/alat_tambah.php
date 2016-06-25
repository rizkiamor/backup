<center>TAMBAH ALAT
<?php
@session_start();
include('../codeauto.php');
include_once('../koneksi.php');
?>
<div id="isi">
<table width="455" border="0">
<tr>
<td width="92">Kode Alati</td>
<td width="3">:</td><td width="300">
   <input type="text" name="kd_alat" id="kd_alat" size="40" value="<?php echo kdauto("alat","ALT");?>" disabled />
    <input type="hidden" name="kd_alat" id="kd_alat" size="40" value="<?php echo kdauto("alat","ALT");?>" /></td></tr>
    <tr>
    <td> Model</td>
    <td>:</td><td>
    <input type="text" name="model" id="model" size="40" >
    </td>
    </tr>
    <tr>
    <td> Kode Kategori</td>
    <td>:</td><td>
    <select name="kd_kategori" id="kd_kategori"  >
    <?
	$a=mysql_query("select * from kategori order by kd_kategori");
	while($b=mysql_fetch_array($a)){
	?>
    <option value="<? echo $b[0]; ?>"><? echo $b[0]; ?></option>
    <?
	} ?>
    </select>
    </td>
    </tr>
    <tr>
    <td> Merk</td>
    <td>:</td><td>
    <input type="text" name="merk" id="merk" size="40" >
    </td>
    </tr>
    <tr>
    <td> Kode Pembuat</td>
    <td>:</td><td>
    <select name="kd_pembuat" id="kd_pembuat" onchange="cek()">
    <? $c=mysql_query("select * from pembuat order by kd_pembuat");
	while($d=mysql_fetch_array($c)){
	?>
    <option  value="<?php echo  $d[0];?>"><?php echo  $d[0];?></option>
       <?
	}
?>
    </select><div id="nama"></div>
   </td>
    </tr>
   <tr>
    <td> Tahun Buat</td>
    <td>:</td><td>
    <select name="thn_buat" id="thn_buat">
     <option>2001</option>
     <option>2002</option>
     <option>2003</option>
     <option>2004</option>
     <option>2005</option>
     <option>2006</option>
     <option>2007</option>
     <option>2008</option>
     <option>2009</option>
     <option>2010</option>
    </select>
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
