
<form id="form-upload5" method="post" action="proses5.php" enctype="multipart/form-data">

   <input type="file" name="gambar" id="gambar1" style="padding:5px;border:solid 1px #999"> 
   <select name="nama" id="""nama" style="padding:7px;border:solid 1px #999"> 
   <?
	$h=('! ! ! ! Pilih Nama Siswa ! ! ! !');
	$a=mysql_query("select * from data order by nama ASC");
	while($b=mysql_fetch_array($a)){
	?>
    
    <option value="<? echo $b[3]; ?>"><? echo $b[2]; ?></option>
    <?
	} ?></select>
    
   &nbsp;<input type="submit" id="upload-gambar" value="upload"  >
   <br>
   <br>

 

</form>





