<? @include_once("app/view/_layout/_adminheader.php"); ?>
<div id="container">
	<div class="data-frame">
		<h1><img src="<?= asset::getImage('logo.png') ?>" /> </h1>
		<? @include_once("app/view/_layout/_adminmenu.php"); ?>
		<div class="content">
		<h1>Tutorial</h1>
		<? if(isset($error)){ ?>
		<div class='error'>
		 <?= $error ?>
		</div>
		<? } ?>
		<form action="<?= url('berita/update') ?>" method="POST" class="form" enctype="multipart/form-data">
		<? foreach($berita as $data){ ?>
			<label>Judul</label>
			<label><input type="text" name='judul' class="input" value="<?= $data['JUDUL'] ?>"></label>
			<label>Gambar</label>
			<label><img src="<?= asset::getImage($data['GAMBAR']) ?>" alt=""></label>
			<label><input type="file" name='gambar' class="input"></label>
			<label>Kategori</label>
			<label>
				<select name="kategori" class='input'>
					<? foreach ($kategori as $k) {
						if($k["IDKATEGORI"] == $data["IDKATEGORI"]){
							echo "<option value='$k[IDKATEGORI]' selected=selected >$k[NAMAKATEGORI]</option>";
						}else{
							echo "<option value='$k[IDKATEGORI]'>$k[NAMAKATEGORI]</option>";
						}
						
					} ?>
				</select>
			</label>
			<label >
				<textarea name="desk" class='ckeditor'> <?= $data["DESKRIPSI"] ?></textarea>
			</label>
			<label><input type="submit" class='btn' value='simpan data'><input type="button" class='rst' value='batal'></label>
		<? } ?>
		</form>
		</div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>