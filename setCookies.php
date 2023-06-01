<?php
if (isset($_GET["btnSet"]))     //if there is variable or not is checked by isset
{
    setcookie("fname", $_GET["txtName"], time() + 60, "/");    // / is given in setcookies in order to set cookies in self domain/url
    echo "cookie set";
}
?>

<html>

<head>
    <title> Cookies </title>     
</head>

<body>
    <form action="setCookies.php" method="get">
        Enter Name <input type="text" name="txtName">
        <input type="submit" name="btnSet" value="Set Cookies">
    </form>
</body>

</html>