<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("konek.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>sparepart AC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./dist/css/bootstrap.min.css">
<script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./dist/js/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>PT KARYA INOVASI MANDIRI REMBANG</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

        </div><!--/.navbar-collapse -->
  <div class="jumbotron">
    <h2><b>SISTEM PERSEDIAAN SPAREPART AC</b></h2>
  </div>
<p></p>
<form name="form1" method="post" action="submit.php" class="form-horizontal" role="form">

    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Username :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password : </label>
      <div class="col-sm-5">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>
    </div>

    <div class="form-group">
  <label class="control-label col-sm-2" for="sel1">Hak akses :</label>
  <div class="col-sm-5">
  <select class="form-control" id="akses" name="akses">
    <option value="admin">ADMIN</option>
    <option value="pimpinan">PIMPINAN</option>
  </select>
</div>
</div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
    <br>
  </form>
<div class="jumbotron">
</div>
</div>
</body>
</html>
