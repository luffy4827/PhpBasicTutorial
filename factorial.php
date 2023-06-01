<?php
echo "<b>Finding factorial of the number.</b><br><br> ";
$n = "";
$r = " ";
if (isset($_GET["btnFactorial"])) {
    $n = $_GET["txtnum"];
    $i;
    $f = 1;
    for ($i = 1; $i <= $n; $i++) {
        $f = $f * $i;
    }
    $r = $f;
}
?>
<html>

<head>
    <title>Factorial</title>
</head>

<body>
    <form action="factorial.php" method="get">
        Enter a number <input type="text" name="txtnum" value="<?php echo $n; ?>"><br>
        <input type="submit" name="btnFactorial" value="Factorial"> <br>
        Result <input type="text" name="txtResult" value="<?php echo $r; ?>">
    </form>
</body>

</html>