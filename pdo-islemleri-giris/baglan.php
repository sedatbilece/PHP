<?php


try{
    $url="mysql:host=localhost;dbname=giris;charset=utf8";
    $name="root";
    $password="12345678";



$db=new PDO($url,$name,$password);

echo "veritabanına bağlandı";
}
catch(PDOException $e){

echo $e->getMessage();

}

?>