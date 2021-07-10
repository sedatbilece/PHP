<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 

.error{
    background-color: red;
    display: block;
    width: 100px;
    margin-top: 10px;
}
</style>
</head>
<body>
    <?php 
    require_once "baglan.php";
    ?>



<form action="islem.php" method="POST">

<input type="text" name="Ad" placeholder="ADINIZI GİRİNİZ">
<p></p>
<input type="password" name="Sifre" placeholder="SIFRE GİRİNİZ">

<p></p>
<input type="submit" value="Gönder" name="girisform">

</form>


<div class="error">

<?php 

if(isset($_GET["durum"])){
    if($_GET["durum"]=="ok"){
        echo "islem başarılı";
    
    }
    else{
        echo "islem başarısız";
    }
}

?>
</div>

<hr>
<h4>Kayit listeleme</h4>
<hr>


<?php 

/*

# ilk kayıt gelir
$name_pass_sor = $db->prepare ("SELECT *from name_pass");# YAPILACAK İSLEM

$name_pass_sor-> execute(); # İSLEMİN ÇALIŞTIRILMASI

$bilgicek= $name_pass_sor->fetch(PDO::FETCH_ASSOC);


print_r($bilgicek);

*/

$name_pass_sor = $db->prepare ("SELECT *from name_pass");# YAPILACAK İSLEM

$name_pass_sor-> execute(); # İSLEMİN ÇALIŞTIRILMASI


while(  $bilgicek= $name_pass_sor->fetch(PDO::FETCH_ASSOC)  ) {

      echo   $bilgicek["id"];   echo "       ";
      echo   $bilgicek["name"]; echo "       "; 
      echo   $bilgicek["pass"]; echo "       ";
      echo "<br>";

}


?>




</body>
</html>