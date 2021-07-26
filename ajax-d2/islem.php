<?php 

$postkont=$_POST["islem"];// hangi formun gönderildiği veya form gönderildimi post işlemi düzgün 
#gerçekleşmez ise null döner.






try{
    $url="mysql:host=localhost;dbname=giris;charset=utf8";
    $name="root";
    $password="12345678";


# temel bağlantı işlemi
$db=new PDO($url,$name,$password);

}

catch(PDOException $e){


echo $e->getMessage();# hata mesajını döndürür

}

  


    if($postkont=="kayit"){
     

  # burada islem için sutun adları verildi a ve b bunları y-temsil ediyor 
  $kaydet = $db->prepare("INSERT into mesajlar set  mesajlar_konu=:a , mesajlar_mesaj=:b , mesajlar_zaman=:c");


  setlocale(LC_TIME, 'tr_TR.UTF-8');
  date_default_timezone_set('Europe/Istanbul');

  $date=strftime('%e %B %Y %A  %H:%M');
  
  #burada ise sütunlara istenen değerler atandı
  
  $insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> $_POST["konu"],
      "b"=> $_POST["mesaj"],
      "c"=>$date
  ));



  if($insert){

    echo "Soru Gönderidi";
  }




    }
    if($_GET["Sorusil"]=="ok"){

    
      $kaydet = $db->prepare("DELETE from mesajlar WHERE mesajlar_id=:a");
     
      
     
      
      $insert = $kaydet ->execute(array(
      
          "a"=> $_GET["id"]
          
      ));


if($insert!=null){
header("Location:mesajlar.php?silme=ok");

}
else{
  header("Location:mesajlar.php?silme=no");

}


      


    }



    




?>