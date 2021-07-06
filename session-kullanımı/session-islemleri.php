<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
    #session sayfalar arası taşınabilir

    # çalışılacak sayfada session başlatılmalı
    session_start();
    
    ini_set("session.gc_maxlifetime",3600); # yaşam süresi 1 saat ayarlandı

    ini_get("session.gc_maxlifetime");# yaaşm süresi bilgisini almak
    echo"<br>";




    # session oluşturma
    $_SESSION["ad"]="sedat";
    $_SESSION["yas"]=20;
    

    $_SESSION["iller"]=array("ist","ank","bur","ord");

    echo $_SESSION["ad"];
    echo"<br>";

    print_r( $_SESSION["iller"]);
    echo"<br>";



#session değiştirme
$_SESSION["ad"]="mahmut";
echo $_SESSION["ad"];
    echo"<br>";



    # session silme unset() fonksiyonu

    unset($_SESSION["ad"]);
    echo $_SESSION["ad"];
    echo"<br>";


# isset() ile kontrol yapılabilir


 #session süresini değer olarak atayıp sonrasında kontrol ile time > session["süre"] ile  yapılabilir

    
    ?>
</body>
</html>