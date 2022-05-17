<?php

// CACHEDEN SAYFA KULLANIMI

//bilgiler alınıyor
$host = $_SERVER["HTTP_Host"];
$sayfa = $_SERVER["REQUEST_URI"];
$parametre = $_SERVER["QUERY_STRING"];

$sayfaAdi = md5($host.$sayfa.$parametre);//url hashleme

// yol oluşturma
$yol="cache/".$sayfaAdi."html";

$sure =10;

$hesapla = time()- $sure;


if (file_exists($yol) AND ($hesapla < filemtime($yol) )   ){// kontrol 

    include $yol;
    exit;
}
ob_start();

?>


Hello world 

<h2>deneme sayfası</h2>


<?php 

// oluşturma kısmı
$dosya = fopen($yol ,"w");

fwrite($dosya ,ob_get_contents());

fclose($dosya);

ob_end_flush();




?>