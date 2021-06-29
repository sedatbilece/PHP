<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error{
        background-color: red;
        max-width: 20%;
    }
    </style>
</head>

<body>
<form action="" method="GET">

<input type="text" name="Ad" placeholder="ADINIZI GİRİNİZ">
<p></p>
<input type="text" name="Soyad" placeholder="SOYADINIZI GİRİNİZ">

<p></p>
<input type="submit" value="Gönder" name="adsoyadgönder">

</form>



    <?php 

if(isset($_GET["adsoyadgönder"])){# isset değişken varmı diye bakar 
    # bu sayede form doldurulmadığı halde başarısız yazısı gelmez



    if($_GET["Ad"]=="sedat" AND $_GET["Soyad"]=="bilece"){
        echo "Giriş Başarılı";
    }
    else{
        echo "<p class=\"error\">GİRİŞ BAŞARISIZ</p>";
    }
}
    
    $sayi=4;
    
    if($sayi>4){

        echo "<p>sayi 4 den büyük</p>";
    }
    elseif ($sayi<4){
        echo "<p>sayi 4 den küçüktür</p>";
    }
    elseif($sayi==4){
        echo "<p> sayi 4 tür </p>";
    }

#  -------------------- SWITCH CASE --------------------------

switch($sayi){
    case 0:
        echo "0";
        break;
    case 1:
        echo "1";
        break;
    case 4:
        echo "4";
        break;
}


    
    
    ?>




</body>
</html>