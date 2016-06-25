<? @include_once("app/view/_layout/_adminheader.php"); ?>
<div id="container">
	<div class="data-frame">
		<h1><img src="<?= asset::getImage('logo.png') ?>" /> </h1>
		<? @include_once("app/view/_layout/_adminmenu.php"); ?>
		<div class="content">
		<h1>Kategori <?= $title ?></h1>
		<? if(isset($error)){ ?>
		<div class='error'>
		 <?= $error ?>
		</div>
		<? } ?>
		<form action="<?= url('user/update') ?>" method="POST" class="form">
		<? foreach($user as $item){ ?>
			<label>Nama User</label>
			<label ><input type="text" placeholder="username" class='input' name='username' required=required value=<?= $item["USERNAME"] ?>></label>
			<label>Pass</label>
			<label ><input type="text" placeholder="password" class='input' name='pass' required=required ></label>
			<label><input type="submit" class='btn' value='simpan data'><input type="button" class='rst' value='batal'></label>
		<? } ?>
		</form>
		</div>
		
		<table class='table'>
			<tr>
				<td>No</td>
				<td>Id</td>
				<td>Nama Kategori</td>
				<td>Action</td>
			</tr>
			<? $no = 0; foreach ($users as $data) { $no++; ?>
				<tr>
				<td><?= $no ?></td>
				<td><?= $data["IDUSERS"] ?></td>
				<td><?= $data["USERNAME"] ?></td>
				<td>
				<a href="<?= url('admin/users/'.$data["IDUSERS"].'') ?>" class="link">Ubah Data</a> 
				<a href="<?= url('user/confirm/'.$data["IDUSERS"].'') ?>" class="link-2">Hapus Data</a>
				</td>
			</tr>
			<? }?>
		</table>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>