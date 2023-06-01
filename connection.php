<?php
$server="localhost";
$username="root";
$pass="";
$db_name="bim";
$conn=mysqli_connect($server,$username,$pass,$db_name);
if($conn){
    echo "connection success";
}

else{
    echo "connection not success";
}
?>