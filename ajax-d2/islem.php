<?php 

$postkont=$_POST["islem"];





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
  $kaydet = $db->prepare("INSERT into name_pass set  name=:a , pass=:b ");
    
  
  
  #burada ise sütunlara istenen değerler atandı
  
  $insert = $kaydet ->execute(array(# kayıt başarılı ise insert 1 değilse null değer alır
  
      "a"=> $_POST["konu"],
      "b"=> $_POST["mesaj"],
      
  ));



  if($insert){

    echo "kayıt başarılı";
  }




    }



    




?>