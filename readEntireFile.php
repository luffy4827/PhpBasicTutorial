<?php 
$file=fopen("text.txt","r");
while(!feof($file)){
$line=fgets($file);
echo $line;
}
fclose($file);
?>