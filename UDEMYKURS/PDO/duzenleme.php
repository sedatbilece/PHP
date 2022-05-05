<?php

include "./baglanti.php"; // $db

//prepare()ile  DÜZENLEME
$islem = $db->prepare("UPDATE  client SET ad=:v_ad , num=:v_num , mail=:v_mail  WHERE id=:v_id");

$kontrol2 = $islem ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
    "v_id"=>1,
    "v_ad"=> "ilk kayit düzenleme",
    "v_num"=>"11111",
    "v_mail"=>"11-11@gmail.com"

));

if($kontrol2){
    echo "prepare() başarılı düzenleme <br>";
    
}
else{
    echo " prepare() başarısız düzenleme <br>";
}



?>