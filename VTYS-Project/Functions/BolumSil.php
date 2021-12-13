<?php 
include "baglan.php";

$id= $_GET["id"];


if(isset($_GET["id"])){


    $guncelle = $db->prepare("UPDATE bolum SET Aktiflik=:a where BolumID=:b");


    $insert = $guncelle ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> 0,
      "b"=> $_GET["id"]
      
  ));


}
if($insert!=null){
    header("Location:../Bolum.php?silme1");
    
    }
    else{
      header("Location:../Bolum.php?silme0");
    
    }




?>