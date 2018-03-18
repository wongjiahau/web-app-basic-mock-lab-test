<?php
function initDbConnection()
{
    return mysqli_connect('localhost', 'hou32hou', '842684268426', 'uecs2094_pie');
}
$con = initDbConnection();
