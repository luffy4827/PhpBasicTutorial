<?php
echo "<b> Implementation of ForEach Loop</b><br>";
$favColour=array(
    'Shyam'=> 'Red',
    'Hari'=> 'Green',
    'Peter'=>'Yellow'
);
foreach($favColour as $k=>$v){
    echo "Fav colour of $k is $v.<br>";
}
?>