
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
      echo '<div class="alert alert-success" role="alert">
      e posta onayı tamamlandı
    </div>';
  }
  else{
    
    echo '<div class="alert alert-danger" role="alert">
    e posta onayı Başarısız , Epostanızı doğru girdiğinizden emin olunuz
  </div>';
  }


}



?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>