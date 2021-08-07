<?php




try{
  $url="....";
  $name="....";
  $password="....";
  
  
  # temel bağlantı işlemi
  $db=new PDO($url,$name,$password);
  
  }
  
  catch(PDOException $e){
  
  
  echo $e->getMessage();# hata mesajını döndürür
  
  }

  $d = $db->query("INSERT INTO Duyurular (Baslik,Duyuru,Tarih) VALUES ('" . $_POST["Baslik"] . "', '" . $_POST["Duyuru"] . "', '" . $_POST["Tarih"] . "')");

  

   if($d){

      echo "İçerik başarıyla yüklendi";
    }
    else{
        echo $_POST["Baslik"];
        echo $_POST["Duyuru"];
        echo $_POST["Tarih"];
        
      
    }


   








?>
