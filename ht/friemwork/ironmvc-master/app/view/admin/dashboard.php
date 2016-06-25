<? @include_once("app/view/_layout/_adminheader.php"); ?>
<div id="container">
	<div class="data-frame">
		<h1><img src="<?= asset::getImage('logo.png') ?>" /> </h1>
		<? @include_once("app/view/_layout/_adminmenu.php"); ?>

		<div class="content"><h1>Welcome to dashboard</h1></div>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>