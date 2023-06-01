<?php 
$m=array(12,33,15,10,20,30);
function asc($n){
    sort($n);
    $length=count($n);
    for($i=0;$i<$length;$i++){
        echo $n[$i];
        echo "<br>";
}
}
asc($m);
?>
