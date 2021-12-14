<?php
include "baglan.php";


$roladi=$_POST["RolAdı"];

$rollevel=$_POST["RolLevel"];


if($roladi!=null && $rollevel!=null){


    $kaydet = $db->prepare("INSERT into rol set  RolAdı=:a , RolLevel=:b ,Aktiflik=1");


    $insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> $roladi,
      "b"=> $rollevel
      
  ));

}

if($insert!=null){
    header("Location:../Roller.php?ekleme1");
    
    }
    else{
      header("Location:../Roller.php?ekleme0");
    
    }


?>