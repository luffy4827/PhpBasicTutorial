<?php
$n = $n1 = $n2 = "";
$result = "";

if (isset($_GET["btnCalculate"])) {
    $n1 = $_GET["txtnum1"];
    $n2 = $_GET["txtnum2"];
    $n = $_GET["txtn"];

    switch ($n) {
        case 1:
            $result = $n1 + $n2;
            break;

        case 2:
            $result = $n1 - $n2;
            break;

        case 3:
            $result = $n1 * $n2;
            break;

        default:
        $result="Invalid Opeation";
            echo "Number 3 is the maximum you can insert in operation field. <br> <br>";
    }
}
?>

<html>

<head>

    <title>Calculator Using Switch Case</title>
</head>

<body>
    <label><b> Basic Calculator </b></label>
    <form action="calculator.php" method="get">
        Enter 1st number: <input type="number" name="txtnum1" value="<?php echo $n1 ?>">
        Enter 2nd number: <input type="number" name="txtnum2" value="<?php echo $n2 ?>"><br>
        Operation: <input type="number" name="txtn" value="<?php echo $n ?>">
        <input type="submit" name="btnCalculate" value="Calculate"><br>
        Final Ouput: <input type="text" name="calResult" value="<?php echo $result ?>">
    </form>
</body>

</html>