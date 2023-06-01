<?php
$i = "";
$p = "";
$t = "";
$r = "";
if (isset($_POST["btnIntrest"])) {
    $p = $_POST["txtP"];
    $t = $_POST["txtT"];
    $r = $_POST["txtR"];
    $i = ($p * $t * $r) / 100;
}
?>



<html>

<head>
    <title>Simple Intrest</title>
</head>

<body>
    <form action="intrest.php" method="post">
        <label>Calculation Of Simple Intrest of A Given Data</label> <br>
        Principal: <input type="text" name="txtP" value="<?php echo $p; ?>"><br>
        Time: <input type="text" name="txtT" value="<?php echo $t; ?>"><br>
        Rate: <input type="text" name="txtR" value="<?php echo $r; ?>"><br>
        <input type="submit" name="btnIntrest" value=" Intrest"> <br>
        Simple Intrest: <input type="text" name="txtI" value="<?php echo $i; ?>"><br>
    </form>
</body>

</html>