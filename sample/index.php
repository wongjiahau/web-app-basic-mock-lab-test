<?php
$contacts = [
    [
        'name'     => 'wong',
        'phone'    => '0123456789',
        'email'    => 'chiakh@duck.com',
        'facebook' => 'wongfb'
    ]
];

echo "<table border='1'>";
echo "<tr>";
foreach ($contacts[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

foreach ($contacts as $c) {
    echo "<tr>";
    foreach ($c as $key => $value) {
        if($key == 'facebook') {
            echo "<td><a href='https://www.facebook.com/$value' target='_blank'>$value</a></td>";
            continue;
        }
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>