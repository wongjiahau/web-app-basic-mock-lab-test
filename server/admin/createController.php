<?php
  var_dump($_REQUEST);
if (!empty(($_POST["subject"]))) {
    var_dump($POST);
    // header('Location: index.php');
    die;
}