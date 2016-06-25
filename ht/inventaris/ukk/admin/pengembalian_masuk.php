<table width="259" height="152" border="1" align="center">
  <tr>
    <td width="249" height="24"><center>PENGEMBALIAN BARANG</center></td>
  </tr>
  <tr>
    <td align="center">Masukan label barang
      <br><select name="kembali" id="kembali" >
      <?php
	  include('../koneksi.php');
	 $a=mysql_query("select from detail_inventaris order by kd_inventaris ");
	 $b=mysql_fetch_array($a);
	  ?>
      <option><? echo $b[0]; ?></option>
      </select>
      <br>
    <input type="submit" value="kembalikan" onClick="kembali()">

    </td>
  </tr>
  <tr>
    <td><div id="kem">
    </div></td>
  </tr>
  <tr>
    <td><input type="submit" value="proses" onClick="kembali()"></td>
  </tr>
</table>
<?php

?>