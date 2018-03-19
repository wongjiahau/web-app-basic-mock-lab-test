<?php
session_start();
unset($_SESSION['current_user']);
session_destroy();
header('location: login.php');
die;
?>