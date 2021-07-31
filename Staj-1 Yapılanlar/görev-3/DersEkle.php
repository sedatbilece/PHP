<?php




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

  $d = $db->query("INSERT INTO Dersler (DersId,HocaAdi,Konu,VideoLink) VALUES ('" . $_POST["DersId"] . "','" . $_POST["HocaAdi"] . "', '" . $_POST["Konu"] . "', '" . $_POST["VideoLink"] . "')");

  

   if($d){

      echo "İçerik başarıyla yüklendi";
    }
    else{
      echo "İçerik yükleme başarısız !";
      
    }


   








?>
