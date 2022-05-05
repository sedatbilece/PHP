<?php

include "./baglanti.php"; // $db

//prepare()ile  SİLME
$islem = $db->prepare("DELETE FROM client  WHERE id=:v_id");

$kontrol2 = $islem ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
    "v_id"=>6
    

));

if($kontrol2){
    echo "prepare() başarılı SİLME <br>";
    
}
else{
    echo " prepare() başarısız SİLME <br>";
}



?>