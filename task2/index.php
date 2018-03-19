<html>
<body>
<h1>Open file in PHP</h1>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$file = fopen('./file.txt', 'r');
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Email</th><th>Gender</th></tr>";
while(!feof($file)) {
    $fields = explode(';', fgets($file));
    echo "<tr>";
    foreach ($fields as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
fclose($file);
?>
<a href='insert.php'>Insert new record</a>
</body>
</html>