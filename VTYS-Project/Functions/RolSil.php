<?php 
include "baglan.php";

$id= $_GET["id"];


if(isset($_GET["id"])){


    $guncelle = $db->prepare("Delete from rol where RolID=:b");


    $insert = $guncelle ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "b"=> $id
      
  ));


}
if($insert!=null){
    header("Location:../Roller.php?silme1");
    
    }
    else{
      header("Location:../Roller.php?silme0");
    
    }




?>