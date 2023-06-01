<?php
echo "<b> Implementation of Multi Dimensional Array</b><br>";
$data = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
    array(10, 11, 12)
);
print_r($data);
echo "<hr> \n";

for ($r = 0; $r < 4; $r++) {
    for ($c = 0; $c < 3; $c++) {
        echo "The numbers are " . $data[$r][$c] . "<br>";
    }
    echo "<hr> \n";
}
