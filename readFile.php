<?php 
echo "<b> Reading file </b><br>";
$file=fopen("text.txt", "r") or die("unable to open file");
echo fread($file, "24");
fclose($file);
?>