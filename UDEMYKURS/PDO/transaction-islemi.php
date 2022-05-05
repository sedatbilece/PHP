<?php 
include "./baglanti.php"; // $db

$db->beginTransaction();
// İŞLEM 1
$islem1 = $db->query("INSERT INTO client SET ad=:v_ad , num=:v_num , mail=:v_mail ");
$kontrol1 = $islem1 ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır

    "v_ad"=> "sedat-x1",
    "v_num"=>"1327",
    "v_mail"=>"denme2@gmail.com"

));

// iŞLEM 2
$islem2 = $db->query("INSERT INTO client SET ad=:v_ad , num=:v_num , mail=:v_mail ");
$kontrol2 = $islem2 ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır

    "v_ad"=> "sedat-x2",
    "v_num"=>"1327",
    "v_mail"=>"denme2@gmail.com"

));


if($kontrol1 AND $kontrol2){
    
    $db->commit();
    echo " transaction başarılı ekleme <br>";
    
}
else{
    $db->rollBack();
    echo " transaction başarısız ekleme <br>";
}



?>