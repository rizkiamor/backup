<? @include_once("app/view/_layout/_header.php"); ?>
<div class="bg-login">
	<div class="form-login">
	<? if(isset($error)){ ?>
	<div class='error'>
		 <?= $error ?>
	</div>
	<? } ?>
		<form action="<?= url('login/cek') ?>" method="POST">
		<div class="title">Login Form</div>
		<label for="">Username</label>
		<label for=""><input type="text" placeholder="username" name="user"></label>
		<label for="">Password</label>
		<label for=""><input type="password" placeholder="password" name="pass"></label>
		<label for="">
		<input type='submit' value='login' class="green">
		<input type='submit' value='batal' class="red">
		</label>
		</form>
	</div>
</div>
<? @include_once("app/view/_layout/_footer.php"); ?>