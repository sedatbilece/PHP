<?php 

try{
    $url="mysql:host=localhost;dbname=deneme2;charset=utf8";
    $name="root";
    $password="admin1234";

echo "baglaniliyor .... <br>";
# temel bağlantı işlemi
$db=new PDO($url,$name,$password);
echo "baglanti  ....<br>";

}

catch(PDOException $e){

    echo "HATA  ....<br>";
echo $e->getMessage();# hata mesajını döndürür

}


?>