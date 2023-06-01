<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert Into Database</title>
</head>
<body>
<form method="POST">
      <label><b>Name: <input type="text" name="name"></b></label><br>
      <label><b> Age: <input type="text" name="age"></b></label><br>
    <label><b>Gender: Male <input type="radio" value="male" name="gender">Female:<input type="radio"  name="gender"value="female" ></b></label><br>
      <input type="submit" value="submit" name="submit">
      <input type="reset" value="Reset" name="reset">
      </form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$query="insert into student_info values('$name','$age','$gender')";
$INSERT=mysqli_query($conn,$query);
if($INSERT){
    echo "Inserted Success";
}
else {
    echo "not inserted";
}
}
?>