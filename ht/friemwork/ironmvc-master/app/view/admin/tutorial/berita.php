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
		<br />
		<a class="btn" href="<?= url('berita/add')?>">Tambahkan Berita</a>
		<br />
		<br />
		<table class='table'>
			<tr>
				<td>No</td>
				<td>Judul</td>
				<td>Tanggal Upload</td>
				<td>Aksi</td>
			</tr>
			<? foreach ($berita as $data) { $no = 0; $no++; ?>
				<tr>
				<td><?= $no ?></td>
				<td><?= $data["JUDUL"] ?></td>
				<td><?= $data["TANGGALUPLOAD"] ?></td>
				<td>
				<a href="<?= url('admin/berita/'.$data["IDTUTORIAL"].'') ?>" class="link">Ubah Data</a> 
				<a href="<?= url('berita/confirm/'.$data["IDTUTORIAL"].'') ?>" class="link-2">Hapus Data</a>
				</td>
			</tr>
			<? } ?>
		</table>
		</div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>