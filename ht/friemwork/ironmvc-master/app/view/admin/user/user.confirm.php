<? @include_once("app/view/_layout/_adminheader.php"); ?>
<div id="container">
	<div class="data-frame">
		<h1><img src="<?= asset::getImage('logo.png') ?>" /> </h1>
		<? @include_once("app/view/_layout/_adminmenu.php"); ?>
		<div class="content">
		<h1>Konfirmasi penghapusan data</h1>
		<label><div class='warning'>Apa anda yakin menghapus data ini ...? (<?= $userid ?>)</div></label>
		<label>
		<a class='btn' href="<?= url('users/delete/'.$userid) ?>">Iya</a>
		<a class='rst' href="<?= url('admin/users') ?>">Tidak</a>
		</label>
		</div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>