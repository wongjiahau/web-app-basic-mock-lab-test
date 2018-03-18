<html>
<body>
<?php
function app()
{
    require('./report_error.php');
    require('./conn.php');
    retrieve($con);
    mysqli_close($con);
}

function retrieve($con)
{
    $result = mysqli_query($con, "select * from announcement;");
    $fields = mysqli_fetch_fields($result);
    echo "<table border='1'><tr>";
    foreach ($fields as $key => $value) {
        $header = $value->name;
        echo "<th>$header</th>";
    }
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    };
    echo "</table>";
}

app();
?>

<button onclick='window.location.replace("create.php")'>Add new accouncement</button>
</body>
</html>
