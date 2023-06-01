<?php
$n=$s="";
if(isset($_GET["btnPalindrome"]))
{
    $x=$_GET["txtnum"];
    $r=0;
    $sum=0;
    while($x>0)
    {
        $r=$x%10 ;
        $sum=$sum*10+$r;
        $n=floor($x/10);
    }
    $s=$sum;
}

?>

<html>
<head>
    <title>Palindrome</title>
</head>
<body>
    <form action="palindrome.php" method="get">
        Enter a number <input type="text" name="txtnum" value="<?php echo $x; ?>"><br>
        <input type="submit" name="btnPalindorme" value="Palindrome"> <br>
        Result <input type="text" name="txtResult" value="<?php echo $s; ?>">
    </form>
</body>
</html>