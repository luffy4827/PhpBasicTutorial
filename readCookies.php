<?php
echo "<b> Reading cookies </b><br>";
if (isset($_COOKIE["fname"])) {
    $name = $_COOKIE["fname"];
} else {
    $name = "Darshan Chhetri";
}
echo $name;
?>