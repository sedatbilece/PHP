<?php 

$Ad= $_POST["Ad"];
$Soyad= $_POST["Soyad"];
$Tel= $_POST["Tel"];
$Mail= $_POST["Mail"];
$BolumID= $_POST["BolumID"];
$RolID= $_POST["RolID"];



$kaydet = $db->prepare("INSERT into calisan set  Ad=:ad , Soyad=:soyad ,Tel=:tel , Mail=: mail , BolumID=bolum , RolID=:rol,Aktiflik=1");


$insert = $kaydet ->execute(array(

  "ad"=>$Ad,
  "soyad"=>$Soyad,
  "tel"=>$Tel,
  "mail"=>$Mail,
  "bolum"=>$BolumID,
  "rol"=>$RolID
  
));



if($insert!=null){
header("Location:../Calisan.php?ekleme1");

}
else{
  header("Location:../Calisan.php?ekleme0");

}

?>