<?php 

try{
    // uzak sunucu bağlantısı için url kısmına host adresi ve port bilgisi girilmeli
    $url="mysql:host=localhost;dbname=vtysproje;charset=utf8";
    $name="root";
    $password="12345678";


# temel bağlantı işlemi
$db=new PDO($url,$name,$password);

}

catch(PDOException $e){


echo $e->getMessage();# hata mesajını döndürür

}

?>