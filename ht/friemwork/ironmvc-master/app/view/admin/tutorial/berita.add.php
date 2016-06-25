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
		<form action="<?= url('berita/save') ?>" method="POST" class="form" enctype="multipart/form-data">
			<label>Judul</label>
			<label><input type="text" name='judul' class="input"></label>
			<label>Gambar</label>
			<label><input type="file" name='gambar' class="input"></label>
			<label>Kategori</label>
			<label>
				<select name="kategori" class='input'>
					<? foreach ($kategori as $k) {
						echo "<option value='$k[IDKATEGORI]'>$k[NAMAKATEGORI]</option>";
					} ?>
				</select>
			</label>
			<label >
				<textarea name="desk" class='ckeditor'></textarea>
			</label>
			<label><input type="submit" class='btn' value='simpan data'><input type="button" class='rst' value='batal'></label>
		</form>
		</div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>