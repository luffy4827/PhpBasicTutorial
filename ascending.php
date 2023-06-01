<?php 
echo "<h3> Sorting data in ascending order</h3>";
$mark = array(10,20,9,30);
sort($mark);
$arrlength=count($mark);
for($i=0;$i<$arrlength;$i++) {
    echo $mark[$i];
    echo "<br>";
}
?>