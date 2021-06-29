<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="" method="GET">

<input type="text" name="Ad" placeholder="ADINIZI GİRİNİZ">
<p></p>
<input type="text" name="Soyad" placeholder="SOYADINIZI GİRİNİZ">

<p></p>
<input type="submit" value="Gönder">

</form>



    <?php 

    if($_GET["Ad"]=="sedat" AND $_GET["Soyad"]=="bilece"){
        echo "Giriş Başarılı";
    }
    else{
        echo "GİRİŞ BAŞARISIZ";
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