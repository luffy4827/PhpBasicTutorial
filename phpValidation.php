<?php
if (isset($_GET["btnSave"])) {
    if ($_GET["txtName"] == "") {
        echo "please enter the name <br>";
    }
    if (strlen($_GET["txtName"]) >4 || strlen($_GET["txtName"]) <6)
    {
        echo "please enter character between 4 and 6<br>";
    }


    if ($_GET["txtEmail"] == "") {
        echo "please enter the Email <br>";
    }


    if ($_GET["txtPassword"] == "") {
        echo "please enter the Password <br>";
    }


    if ($_GET["txtConfirmPassword"] == "") {
        echo "please confirm the password <br>";
    }

    if (isset($_GET["rdMode"] )== null) {
        echo "please determine the mode <br>";
    }


    if (isset($_GET["chkAgree"] )== null) {
        echo "you should agree our terms and condition <br>";
    }
}
?>

<html>

<head>
    <title> PHP Form Validation </title>
</head>

<body>
    <form action="phpValidation.php" method="get">
        Name <input type="text" name="txtName"><br>
        Email <input type="text" name="txtEmail"><br>
        Password<input type="password" name="txtPassword"><br>
        Confirm Password<input type="password" name="txtConfirmPassword"><br>
        Mode<input type="radio" name="rdMode" value="Active"> Active
        <input type="radio" name="rdMode" value="Passive">Passive <br>
        <input type="checkbox" name="chkAgree" value="Agree"> Agree <br>
        <input type="submit" value="Save" name="btnSave">

    </form>
</body>

</html>