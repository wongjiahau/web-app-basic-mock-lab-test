<?php
session_start();
if(empty($_SESSION['current_user'])) {
    header('location: login.php');
    die;
}
?>
<html>
<h1>Welcome back <?php echo $_SESSION['current_user'].'!';?></h1>
<a href='logout.php'>Logout</a>
</html>