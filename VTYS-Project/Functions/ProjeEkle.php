<?php
include "baglan.php";


$ProjeAdı=$_GET["ProjeAdı"];

$BolumID=$_GET["BolumID"];
$SorumluID=$_GET["SorumluID"];

/*
echo $ProjeAdı;echo "<br>";
echo $BolumID;echo "<br>";
echo $SorumluID;echo "<br>";
*/


    $kaydet = $db->prepare("INSERT into proje set  ProjeAdı=:a , BölümID=:b ,SorumluID=c,Aktiflik=1");


    $insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> $ProjeAdı,
      "b"=> $BolumID,
      "c"=>$SorumluID
      
  ));





if($insert!=null){
    header("Location:../Proje.php?ekleme1");
    
    }
    else{
      header("Location:../Proje.php?ekleme0");
    
    }




?>