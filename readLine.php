<?php 
echo "<b> Reading Line of file </b><br>";
$file=fopen("text.txt","r");
$line=fgets($file);
echo $line;
?>