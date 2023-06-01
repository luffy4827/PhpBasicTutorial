<?php
echo "<br> Full name of the day " . date("l");
echo "<br> Day in digit format " . date("d");
echo "<br> Name of day in short form " . date("D");
echo "<br> Month name in digits " . date("m");
echo "<br> Month name in short form " . date("M");
echo "<br>  Year in short digits " . date("y");
echo "<br> Year in full-digits " . date("Y");



echo "<br>" . date("d/m/y");
echo "<br>" . date(DATE_COOKIE);

// date in associative arraay format
$mydate = getdate();
echo ("<br>" . $mydate["mday"] . '-' . $mydate["month"] . '-' . $mydate["year"]);
echo "<br>";
print_r($mydate); //array format

// crate date from string format
$createMydate = date_create("20220101");
echo "<br>" . date_format($createMydate, "y-m-d");
?>
<!-- if you write m/d/y then you can make as your order if date cookie is written then it comes in 
cookie formart -->