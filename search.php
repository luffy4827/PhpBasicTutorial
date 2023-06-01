<?php
$fruits = array("Mango", "Banana", "Apple", "Orange", "strawberry");
print_r($fruits);
echo "<br>";
$f=0;
echo "$fruits[0] and $fruits[1] are the fruits I like the most <br>";
for ($i=0; $i < count($fruits); $i++)
 { 
   if($fruits[$i]=="Banana"){
       echo "found <br>";
       $f=1;
       break;
   } 
}
   if($f==0)
   {
       echo "not found ";
   }
?>