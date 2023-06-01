<?php
echo "<b> Details of server agent </b><br>";
   $useragent = $_SERVER ['HTTP_USER_AGENT'];
   echo "<b>Your User Agent is</b>: " . $useragent;
?>