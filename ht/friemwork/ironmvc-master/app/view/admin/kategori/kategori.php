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
		<form action="<?= url('kategori/save') ?>" method="POST" class="form">
			<label>Nama Kategori</label>
			<label ><input type="text" placeholder="nama kategori" class='input' name='nama'></label>
			<label><input type="submit" class='btn' value='simpan data'><input type="button" class='rst' value='batal'></label>
		</form>
		</div>
		
		<table class='table'>
			<tr>
				<td>No</td>
				<td>Id</td>
				<td>Nama Kategori</td>
				<td>Action</td>
			</tr>
			<? $no = 0; foreach ($kategoris as $data) { $no++; ?>
				<tr>
				<td><?= $no ?></td>
				<td><?= $data["IDKATEGORI"] ?></td>
				<td><?= $data["NAMAKATEGORI"] ?></td>
				<td>
				<a href="<?= url('admin/kategori/'.$data["IDKATEGORI"].'') ?>" class="link">Ubah Data</a> 
				<a href="<?= url('kategori/confirm/'.$data["IDKATEGORI"].'') ?>" class="link-2">Hapus Data</a>
				</td>
			</tr>
			<? }?>
		</table>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>