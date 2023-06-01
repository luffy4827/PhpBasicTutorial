<?php 
echo "<b> Sorting the data in descending order . </b><br>";
$mark = array(10,20,9,30);
rsort($mark);
$arrlength=count($mark);
for($i=0;$i<$arrlength;$i++) {
    echo $mark[$i];
    echo "<br>";
}
?>