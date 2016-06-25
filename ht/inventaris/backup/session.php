<?php
session_start();
require_once ("konek.php");
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}
?>

<?php
$sql = "SELECT * FROM tb_user WHERE username = '$username'";
$query = $db->query($sql);

?>
