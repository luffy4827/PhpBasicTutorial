<?php 
echo "<b> Passing array as function </b><br>";
$m=array(12,20,30);
function total($sub){
    echo $sub[1];
} 
total($m);
?>