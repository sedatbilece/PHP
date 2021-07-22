
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">

<input type="email" placeholder="eposta doğrula" name="eposta">

<input type="submit" value="Onayla">


</form>



<?php 

include "baglan.php";


$ayarsor=$db->prepare("SELECT * FROM uyeler where aktivasyon=:xak and eposta=:xe");

$ayarsor->execute(array(

  "xak"=>$_GET["kod"],
  "xe"=>$_POST["eposta"]
));

$ayarcek= $ayarsor->fetch(PDO::FETCH_ASSOC);

if($ayarcek){


    $kayitol = $db->prepare("UPDATE  uyeler set  durum=:d where aktivasyon=:xak");
    
  
  
  
  # kontrol işlemi eklenebilir
  $insert = $kayitol ->execute(array(
  
    
      "d"=>1,
      "xak"=>$_GET["kod"]
  ));


  if($insert){
      echo "durum değiştirildi";
  }


}



?>


?>

</body>
</html>