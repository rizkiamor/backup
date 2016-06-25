<? @include_once("app/view/_layout/_adminheader.php"); ?>
<div id="container">
	<div class="data-frame">
		<h1><img src="<?= asset::getImage('logo.png') ?>" /> </h1>
		<? @include_once("app/view/_layout/_adminmenu.php"); ?>
		<div class="content">
		<h1>Kategori</h1>
		<? if(isset($error)){ ?>
		<div class='error'>
		 <?= $error ?>
		</div>
		<? } ?>
		<form action="<?= url('kategori/update') ?>" method="POST" class="form">
        <? foreach ($getone as $data) { ?>
            <br />
            <a href="<?= url('admin/kategori') ?>" class='btn red'>back</a>
			<input type="hidden" name='id' value="<?= $data["IDKATEGORI"] ?>">
			<input type="hidden" name='tmp_name' value="<?= $data["NAMAKATEGORI"] ?>">
            <br /><br />
			<label>Nama Kategori</label>
			<label ><input type="text" placeholder="nama kategori" class='input' name='nama' value="<?= $data['NAMAKATEGORI'] ?>"></label>
			<label><input type="submit" class='btn' value='simpan data'><input type="button" class='rst' value='batal'></label>
        <? } ?>
        </form>
		</div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>