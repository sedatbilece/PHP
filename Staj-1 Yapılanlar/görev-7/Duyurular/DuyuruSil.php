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


$id=$_POST["Id"];


$kaydet = $db->prepare("DELETE from Duyurular WHERE Id=:a");
     
      
     
      
$insert = $kaydet ->execute(array(

    "a"=> $id
    
));


if($insert){

 echo "Soru Silindi";
}
else{
  echo "Soru Silinemedi";
}



?>