<?php
session_start();
if (isset($_SESSION["valid"]))              //	or 	if(isset($_SESSION["valid"])==null){header("location:welcome.php");}    
{
} else {
    header("location:welcomePage.php");
}
if (isset($_POST["btnsignout"])) {
    session_unset();
    session_destroy();
    header("location:session.php");
}
?>

<html>
image.png
<head>
    <title> Welcome </title>
</head>

<body>
    <form action="welcome.php" method="post">
        <h4> Welcome To The Startup Page</h4>
        <input type="submit" name="btnsignout" value="Sign Out">
    </form>
</body>

</html>