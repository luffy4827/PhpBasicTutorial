<?php
echo "<b>Basic Login Page Using Session</b> <br>";
session_start();   //this function start the session
if (isset($_POST["btnlogin"])) {
    if ($_POST["txtpassword"] == "admin" && $_POST["txtName"] == "admin") {
        $_SESSION["valid"] = true;
        header("location:welcome.php");  // header ridirect to the particular location
    } else {
        echo "user name and password not match";
    }
}
?>

<html>

<head>
    <title> login wwith session </title>
</head>

<body>
    <form action="session.php" method="post">
        User Name <input type="text" name="txtName">
        Password<input type="password" name="txtpassword">
        <input type="submit" name="btnlogin" value="Log In">
    </form>
</body>

</html>