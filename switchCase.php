<?php
$c = "";
$flower = "";

if (isset($_GET["btnFind"])) {
    $c = $_GET["txtcolour"];
    switch ($c) {
        case "red":
            $flower = " Rose ";
            break;

        case "yellow":
            $flower = "Marigold";
            break;

        case "white":
            $flower = "Lotus";
            break;

        default:
            $flower="Data not found";
            echo 'Colour option other then red, yellow and white is not supported. '."<br> <br>";
    }
}
?>
<html>

<head>

    <title>Switch Case Statement</title>
</head>

<body>
    <label><b>Switch Case </b></label>
    <form action="switchCase.php" method="get">
        Enter a colour: <input type="text" name="txtcolour" value="<?php echo $c ?>"><br>
        <input type="submit" name="btnFind" value="Find Flower"><br>
        Flower with given colour: <input type="text" name="btnFlower" value="<?php echo $flower ?>">
    </form>
</body>

</html>