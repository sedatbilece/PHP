<?php 


setcookie("ad","sedat",time()+60*60,"/");// 1 saatlik çerez oluşturuldu

setcookie("ad","SEDAT",time()+60*60,"/");//  değiştirme işlemi



setcookie("sayi","34",time()+60*60);// 1 saatlik çerez oluşturuldu


setcookie("sayi","34",time()-1);//  silme işlemi


echo "<pre>";
print_r($_COOKIE);

echo "<br>";

echo $_COOKIE["ad"];



?>