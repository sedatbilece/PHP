<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



    <?php 
    # cookie olusturma 
    # cookie genelde beni hatırla alanlarında kullanılır

# saat saniye cinsinden 60*60
    setcookie("sehir","ankara",time()+60);
    
    # cookie güncelleme işlemi
    setcookie("sehir","istanbul",time()+60);

      # cookie silme işlemi
      setcookie("sehir","",time()-1);
    
    echo $_COOKIE ["sehir"]; 


   # cookie varlık kontrolü

if(isset($_COOKIE["sehir"])){

    echo "cookie bulunmakta";
}
else{
    echo "cookie bulunamadı !!";
}




    
    ?>
</body>
</html>