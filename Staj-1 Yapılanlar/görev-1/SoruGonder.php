<?php 

$postkont=$_POST["islem"];// hangi formun gönderildiği veya form gönderildimi post işlemi düzgün 
#gerçekleşmez ise null döner.

session_start();

 $guid= $_SESSION["GUID"]; 




try{
    $url="...";
    $name="...";
    $password="...";


# temel bağlantı işlemi
$db=new PDO($url,$name,$password);

}

catch(PDOException $e){


echo $e->getMessage();# hata mesajını döndürür

}




  


    if($postkont=="kayit"){
     

  # burada islem için sutun adları verildi a ve b bunları y-temsil ediyor 
  $kaydet = $db->prepare("INSERT into Sorular set  Soru=:a , tarih=NOW() , tarihkontrol=:b , KullaniciId=:c");

$tarihk=date("d-m-y");
 
  #burada ise sütunlara istenen değerler atandı
  
  $insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> $_POST["mesaj"],
      "b"=>$tarihk,
      "c"=>$guid
  ));



  if($insert){

    echo "Soru Gönderidi";
  }
  else{
    echo "işlem başarısız";
  }




    }


?>