 <?php
$n1="";
$n2="";
$r="";

if(isset($_GET["btnsum"]))
{
	$n1=$_GET["txtnum1"];
	$n2=$_GET["txtnum2"];
	$r=sum($n1,$n2);
}
function sum($a,$b)
{
return($a+$b);
}
?>


<html>
<head>
<title>

</title>
</head>
<body>
<form action="sum function.php" method="get">
Enter a number<input type="text" name="txtnum1" value="<?php echo $n1;?>"><br>
Enter a number<input type="text" name="txtnum2" value="<?php echo $n2;?>"><br>
<input type= "submit" name="btnsum" value="sum"><br>
Sum<input type="text" name="txtresult" value="<?php echo $r?>">
</form>
</body>
</html>