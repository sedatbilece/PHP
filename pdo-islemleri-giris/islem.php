


<?php


#ilk önce bağlan.phpdeki kodlar çağrılır
require_once "baglan.php";

$ad=$_POST["Ad"];
$sifre=$_POST["Sifre"];

echo "<p> $ad </p>";
echo "<p> $sifre </p>";




if(isset($_POST["girisform"])){

    

echo "<p>isset forma girildi </p>";

# burada islem için sutun adları verildi a ve b bunları y-temsil ediyor 
$kaydet = $db->prepare("INSERT into name_pass set 

 name=:a , pass=:b ");



#burada ise sütunlara istenen değerler atandı

$insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır

    "a"=> $_POST["Ad"],
    "b"=> $_POST["Sifre"]

));



if($insert){#insert boşmu ( kayıt varmı ) kontrolü

    echo "<p> +++++ kayıt başarılı +++++</p>";

}
else{
    echo "<p> xxxxx kayıt başarısız  xxxxxx </p>";
}




}




?>