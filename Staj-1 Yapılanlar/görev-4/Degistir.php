<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="index.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<div class="wrapper fadeInDown">
  <div id="formContent">
   
    
    <form method="POST" action="" class="">
      
      <input type="text" id="Email" class="fadeIn third" name="Email" placeholder="Eposta adresiniz">
      <input type="text" id="Sifre" class="fadeIn second" name="Sifre" placeholder="Yeni şifrenizi giriniz">
      
      <input type="submit" class="fadeIn fourth" value="Degistir">
    </form>


  </div>
</div>


<?php

$dsn = '....';

$user = 'g....';

$password = '....';

$db = new PDO($dsn, $user, $password);

$db->query("SET NAMES 'utf8'");

$kod=$_GET["Kod"];
$email=$_POST["Email"];
$sifre=$_POST["Sifre"];
$sor=$db->prepare("SELECT * FROM YeniSifre where  Email=:email and Kod=:kod " );

$sor->execute(array(

  "email"=>$email,
  "kod"=>$kod,
  
));

$kontrol= $sor->fetch(PDO::FETCH_ASSOC);

if($kontrol){


   
$sifrekayit = $db->prepare("UPDATE Kullanicilar set  Sifre=:sifre  WHERE Email=:email");
 
        # kontrol işlemi eklenebilir
        $insert = $sifrekayit ->execute(array(
            "sifre"=>$sifre,
            "email"=> $email
            
            
        ));

       

if($insert ){ ?>
   <script>
     swal("şifre değiştirme işlemi başarılı")
   </script>

    <?php
}



}
else { ?>
    <script>
     swal("şifre değiştirme işlemi başarısız")
   </script>
   <?php 
}
?>



