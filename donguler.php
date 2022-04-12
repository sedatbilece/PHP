<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<select name="" id="">

<?php 

for ($i=0;$i<10;$i++){  ?>


    <option> <?php echo $i ?> </option>
    
    
     <?php  }   ?>


</select>
 


 <?php 
# -------------------- WHILE  DONGUSU --------------------
$say=0;
while($say<10){

echo "say : $say   <br>";

$say++;

}
# -------------------- FOREACH  DONGUSU --------------------
$dizi=array(5,3,6,8,9,4,53,7,552,12,6,42,322,1);

foreach ( $dizi as $val){

    echo "value is : $val <br>";
}



?>



</body>
</html>