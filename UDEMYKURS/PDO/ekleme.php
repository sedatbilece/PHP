<?php 
include "./baglanti.php"; // $db


//query();
$kontrol = $db->query("INSERT INTO client (ad,num,mail) VALUES ('SEDAT',123456,'asd@gmail.com')");



//prepare()ile sonradan değer vermek
$islem = $db->prepare("INSERT INTO client SET ad=:v_ad , num=:v_num , mail=:v_mail ");

$kontrol2 = $islem ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır

    "v_ad"=> "sedat2",
    "v_num"=>"1327",
    "v_mail"=>"denme2@gmail.com"

));


if($kontrol){
    echo " query() başarılı ekleme <br>";
}
else{
    echo " query() başarısız ekleme <br>";
}


if($kontrol2){
    echo "prepare() başarılı ekleme <br>";
    echo "last insert id: ".$db->lastInsertId();
}
else{
    echo " prepare() başarısız ekleme <br>";
}


?>