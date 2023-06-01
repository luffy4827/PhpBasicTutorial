<?php
echo "<b> This is the implementation of the default value. </b><br>";
function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>