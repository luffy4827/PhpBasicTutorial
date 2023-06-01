<?php
$n1="";
$n2="";
$r="";

if(isset($_GET["btnsum"]))
{
	$n1=$_GET["txtnum1"];
	$n2=$_GET["txtnum2"];
	$r=$n1-$n2;
}

?>


<html>
<head>
<title>

</title>
</head>
<body>
<form action="subtract.php" method="get">
Enter a number<input type="text" name="txtnum1" value="<?php echo $n1;?>"><br>
Enter a number<input type="text" name="txtnum2" value="<?php echo $n2;?>"><br>
<input type= "submit" name="btnsum" value="subtract"><br>
Subtracted number is <input type="text" name="txtresult" value="<?php echo $r?>">
</form>
</body>
</html>