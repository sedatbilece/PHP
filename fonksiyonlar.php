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


function yaz (){


    echo " fonksiyon yaz çağrıldı";
}

yaz();

function topla($s1,$s2){

    return $s1+$s2;
}
echo "</br>";

echo topla(5,30);

echo "</br>";


$yaz=get_defined_functions();

echo "<pre>";
print_r($yaz);

echo "<pre>";

?>


</body>
</html>