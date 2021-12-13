

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello
</body>
</html>


<?php 

include "baglan.php";


$BolumAdı=$_POST["BolumAdı"];




echo $BolumAdı;


if($BolumAdı!=null){


    $kaydet = $db->prepare("INSERT into bolum set  BolumAdı=:a , Aktiflik=:b ");


    $insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> $BolumAdı,
      "b"=> 1
      
  ));

}

if($insert!=null){
    header("Location:../Bolum.php?ekleme1");
    
    }
    else{
      header("Location:../Bolum.php?ekleme0");
    
    }

?>