<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_REQUEST['name'])) {
    $fileName = './file.txt';
    $newContent = "\n{$_REQUEST['name']};{$_REQUEST['email']};{$_REQUEST['gender']}";
    $fileHandler = fopen($fileName, 'a') or die ("Cannot open file: $fileName");
    fwrite($fileHandler, $newContent);
    fclose($fileHandler);
    header("Location: index.php");
    die;
}
?>
<html>
<body>
<form action='insert.php' method='POST'>
Name <input type='text' name='name'><br/>
Email <input type='text' name='email'><br/>
Gender <select name='gender'>
    <option name='m'>Male</option>
    <option name='f'>Female</option>
</select><br/>
<input type='submit' value='Submit'>
</form>
</form>
</body>
</html>