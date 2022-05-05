<?php 

try{
    $url="mysql:host=localhost;dbname=deneme2;charset=utf8";
    $name="root";
    $password="admin1234";

echo "baglaniliyor .... <br>";


$db=new PDO($url,$name,$password);# temel bağlantı işlemi

$db->query("SET CHARSET UTF8");#DİL seçimi

echo "baglanti  ....<br>";

}

catch(PDOException $e){

    echo "HATA  ....<br>";
   echo $e->getMessage();# hata mesajını döndürür
   //die("HATA :".$e->getMessage() );

}


  # $db=null; //veritabanı bağlantısı sonlandırılır

?>