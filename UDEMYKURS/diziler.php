<?php 

$dizi =array("sedat","vedat","fatih","fikret");

echo "<pre>";
print_r($dizi);


$mat=[];
$mat[0]=[];

echo "<pre>";
print_r($mat);



$iller=array(
     "ankara"=>06,
     "istanbul"=>34,
     "kırıkkale"=>71,
     "ordu"=>52,
     "izmir"=>35
);
asort($iller);
echo "<pre>";
print_r($iller);

echo "<br>";
sort($iller);
echo "<pre>";
print_r($iller);


echo "<br>";
shuffle($iller);
echo "<pre>";
print_r($iller);

?>