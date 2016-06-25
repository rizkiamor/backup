<?php
require "convert.php";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso8859( ini type textnya, nanti bisa cari di google sesuai keinginan)-1" />
<SCRIPT LANGUAE="JavaScript">
function setFocus() {
document.form1.data.select();
document.form1.data.focu();
}
</script>
<title>(Judul terserah)</title>
</head>
<body onload="javascript:setFocus()">
<form id="form1" name="form1" method="post" action="">
<input type="Text" name="data" />
<input type="submit name="submit" value="convert" />
</form>
<?php
$data = $_POST['data'];
$bilangan = new Konver;
echo $bilangan -> eja($data)."RUPIAH";
?>
</body>
</html>