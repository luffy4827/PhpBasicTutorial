<?php
$Name = $ID = $DOB = $Contact = $Address = $Gender = "";
if(isset($_GET["btnUpdate"])){
    $Name=$_GET["txtName"];
    $ID=$_GET["txtID"];
    $DOB=$_GET["txtDOB"];
    $Contact=$_GET["txtContact"];
    $Address=$_GET["txtAddress"];
    $Gender=$_GET["txtGender"];
    $conn=mysqli_connect("localhost","root","","darshanphpdb");
    $query=alter into info values ('Name'=`$Name`, `ID`=`$ID`, `DOB`=`$DOB`, `Contact`=`$COntact`, `Address`=`$Addrress`, `Gender`=`$Gender`);
    $run=mysqli_query($conn,$query);

}

?>

<html>

<head>
    <title> Update in Database Record</title>
</head>

<body>
    <form action="dBUpdate.php" method="get">
        Name <input type="text" name="txtName"><br>
        ID <input type="text" name="txtID"><br>
        DOB <input type="date" name="txtDOB"><br>
        Contact <input type="text" name="txtContact"><br>
        Address <input type="text" name="txtAddress"><br>
        Gender <select name="ddlGender">
            <option value="none"> Gender </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
        </select><br>
        <input type="submit" name="btnUpdate" value="Update">
    </form>
</body>

</html>