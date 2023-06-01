<?php
$n=$s="";
$x="";
if(isset($_GET["btnReverse"]))
{
    $n=$_GET["txtnum"];
    $x=$n;
    $r=0;
    $sum=0;
    $rev=0;
    while($n>0)
    {
        $r=$n%10;
        $sum=$sum+$r;
        $n=floor($n/10);
        $rev=$rev*10+$r;
    }
    $s=$rev;
}
?>

<html>
<head>
    <title>Reverse Of Number</title>
</head>
<body>
    <form action="reverseOfNum.php" method="get">
        Enter a number <input type="text" name="txtnum" value="<?php echo $x; ?>"><br>
        <input type="submit" name="btnReverse" value="Reverse The Number" > <br>
        Reverse of the given digit is <input type="text" name="txtReverse" value="<?php echo $s; ?>">
    </form>
</body>
</html>