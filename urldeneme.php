<?php 

$url=$_SERVER['REQUEST_URI'];

$dizi=explode("/",$url);

$son=explode(".",$dizi[2]);

echo $son[0];

?>