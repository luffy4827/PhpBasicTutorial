<?php
$p = "";
$r = "";
if (isset($_GET["btnGetDivision"])) {
    $p = $_GET["txtPercentage"];
    if ($p >= 80) {
        $r = "Distinction";
    } elseif ($p >= 60 && $p < 80) {
        $r = "First Division";
    } elseif ($p >= 40 && $p < 60) {
        $r = "Second Division";
    } elseif ($p >= 20 && $p < 40) {
        $r = "Third Division";
    } else {
        $r = "Fail";
    }
}
?>

<html>

<head>
    <title>IfElse Statement</title>
</head>

<body>
    <form action="ifElse.php" method="get">
        Enter obtained percentage<input type="text" name="txtPercentage" value="<?php echo $p; ?>"><br>
        <input type="submit" name="btnGetDivision" value="Division"> <br>
        Result <input type="text" name="txtResult" value="<?php echo $r; ?>">

    </form>
</body>

</html>