<?php 

$sayi1=10;

$sayi2=20;


echo $sayi1." ".$sayi2;

// $1sayi hatali 
echo "<br>";


echo gettype(gettype($sayi1));
echo "<br>";

echo "takim: $sayi1";
echo "<br>";

echo 'takim: $sayi1';
echo "<br>";

 print_r( date("H:m") );
 echo "<br>";

// tür dönüşümünde dikkat et
$cevir1=(int)"asd23";
echo gettype($cevir1);
echo $cevir1;//dönüştüremez ise 0 döndürür
echo "<br>";

$cevir2=(int)"25asd";
echo gettype($cevir2);
echo $cevir2;
echo "<br>";

unset($cevir1);//değişkenleri hafızadan boşaltma

echo $cevir1;

define("ad","sedat");

echo ad;
echo "<br>";
defined("ad");// boolean 1 or 0
echo gettype( defined("ad"));

?>