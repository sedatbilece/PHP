


<?php


#ilk önce bağlan.phpdeki kodlar çağrılır
require_once "baglan.php";

$ad=$_POST["Ad"];
$sifre=$_POST["Sifre"];






if(isset($_POST["girisform"])){

    



# burada islem için sutun adları verildi a ve b bunları y-temsil ediyor 
$kaydet = $db->prepare("INSERT into name_pass set 

 name=:a , pass=:b ");



#burada ise sütunlara istenen değerler atandı

$insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır

    "a"=> $_POST["Ad"],
    "b"=> $_POST["Sifre"]

));



if($insert){#insert boşmu ( kayıt varmı ) kontrolü

   // echo "<p> +++++ kayıt başarılı +++++</p>";


      Header("location:form.php?durum=ok");   #istenilen sayfaya yönlendirme yapar
# form isminden sonra ? ile değişken = durum şeklinde get methodu ile formda yakalanabilir 
# gönderme başarılı veya başarısız yazar



      
}
else{
   // echo "<p> xxxxx kayıt başarısız  xxxxxx </p>";


   Header("location:form.php?durum=no"); 
}




}




?>