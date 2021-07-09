<?php
require_once "baglan.php";

$ad=$_POST["Ad"];
$sifre=$_POST["Sifre"];

echo "<p> $ad </p>";
echo "<p> $sifre </p>";




if(isset($_POST["girisform"])){

    
echo "<p>isset forma girildi </p>";


$dbkaydet = $db->prepare("INSERT into name_pass set 

 name=:a , pass=:b ");

$insert = $kaydet ->execute(array(

    "a"=> $_POST["Ad"],
    "b"=> $_POST["Sifre"]

));




}




?>