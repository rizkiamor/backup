<? @include_once("app/view/_layout/_adminheader.php"); ?>
<div id="container">
	<div class="data-frame">
		<h1><img src="<?= asset::getImage('logo.png') ?>" /> </h1>
		<? @include_once("app/view/_layout/_adminmenu.php"); ?>
		<div class="content">
		<h1>Foto</h1>
		<? if(isset($error)){ ?>
		<div class='error'>
		 <?= $error ?>
		</div>
		<? } ?>
			<div class="item-foto">
				<div class="item-add">
				<div class="ig">add foto</div>
				</div>
				<div class="item-dec">
					<form action="<?= url('foto/save') ?>" method="POST" enctype="multipart/form-data" id="form">
					<input type="file" id='file' name="image">
					<input type="text" name="judul" placeholder="judul foto">
					<select name="kategori">
						<? foreach($kategori as $k){ ?>
							<option value="<?= $k['IDKATEGORI'] ?>"><?= $k["NAMAKATEGORI"] ?></option>
						<? } ?>
					</select>
					<input type="text" name="fname" placeholder="judul foto" class="fname">
					<textarea name="dec"></textarea>
					<input type="submit" class="btn">
				</form>
				</div>
				<div class="clear"></div>
				<? foreach($fotos as $foto){ ?>
					<div class="item">
					<img src="<?= asset::getImage($foto['GAMBAR']) ?>" alt="<?= $foto['JUDUL'] ?>" class='image'>
					</div>
				<? } ?>
			</div>
		
		</div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>