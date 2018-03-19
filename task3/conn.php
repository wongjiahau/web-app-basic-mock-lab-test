<?php
function initDbConnection()
{
    $host = 'localhost';
    $user = 'hou32hou';
    $dbpassword = '1234';
    $dbname = 'uecs2094_pie';
    return mysqli_connect($host, $user, $dbpassword, $dbname);
}
$con = initDbConnection();
