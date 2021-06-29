<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
</head>
<body>
    


    <?php 
    # dizi tanımlama
    $dizi=array("deneme1","deneme2","deneme3",10,20,1.5);
    
    
    print_r($dizi);# dizinin içeriğini farklı gösterir
    
    echo" <p>----------------------------</p>";
   
    echo $dizi[0];

    echo" <p>----------------------------</p>";
    
    $saydizi=array(2,6,8,7,93,7,5,63,74,11,1);

    sort($saydizi);# küçükten büyüğe sıralama
    #   rsort(); büyükten küçüğe sıralar

    # harfleri sırasına göre de sırayablir

    echo print_r($saydizi);
    echo" <p>----------------------------</p>";
    


    echo in_array(7,$saydizi); # kontrol yapar ve 1 dödürür true ise 
    echo" <p>----------------------------</p>";
    $saydizi=implode("+",$saydizi);
    echo $saydizi;# diziyi verilen değerler ile birleştirir ve stringe çevirir

echo" <p>----------------------------</p>";


print_r( explode("+",$saydizi) );#stringi parçalar ve diziye çevirir
echo" <p>----------------------------</p>";



    ?>
</body>
</html>