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
    
    $dizi=array(
       "ad"=> "sedat",
       "soyad" => "bilece",
       "sehir"=> "istanbul"

    );
    $json = json_encode($dizi,JSON_UNESCAPED_UNICODE);# 2. PAR türkçe karakter sorunu için

    print_r($dizi);
    echo "<br>";
    echo $json;
    
    

    $dizi2=json_decode($json); # obje olarak döndürür ( class)
    $dizi3=json_decode($json,true); # array olarak döndürür

    
   echo json_last_error();# hatayı gösterir var ise
   
    ?>
</body>
</html>