<?php
session_start();
unset($_SESSION['SESS_user']);
session_destroy();
header('Location:login.php');
exit();
?>