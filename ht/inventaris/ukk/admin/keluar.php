<?php
@session_start();
unset($_SESSION['user']);
unset($_SESSION['level']);
session_destroy();
header ('Location:../cek.php');
?>
