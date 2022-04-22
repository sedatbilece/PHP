<?php
date_default_timezone_set("Europe/Istanbul");
echo date("d/m/y H:m");

$tarih=date("d.m.y");
$saat=date("H:m:s"); 

echo "<br>";
echo $tarih." ".$saat;


 $unixtime=time();
 echo "<br>";
 echo $unixtime;

 echo "<br>";
 echo date("d*m*y",$unixtime);


$future = mktime("0","0","0", "04","22","2077");
echo "<br>";
echo $future;
echo "<br>";
echo "future : ".date("d/m/y H:m",$future);
?>