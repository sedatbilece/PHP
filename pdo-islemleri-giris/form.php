<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <style> 

.error{
    background-color: red;
    display: block;
    width: 100px;
    margin-top: 10px;
}
.table{
    width: 70%;
    
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

?>

<table class="table table-striped">

<tr>
    <th>id</th>
    <th>name</th>
    <th>password</th>
    <th>islemler</th>
    <th>islemler</th>
</tr>


<?php 

$name_pass_sor = $db->prepare ("SELECT *from name_pass");# YAPILACAK İSLEM

$name_pass_sor-> execute(); # İSLEMİN ÇALIŞTIRILMASI


while(  $bilgicek= $name_pass_sor->fetch(PDO::FETCH_ASSOC)  ) { ?>

     <tr>
     <td> <?php  echo $bilgicek["id"]   ?> </td>
     <td> <?php  echo $bilgicek["name"]   ?> </td>
     <td> <?php  echo $bilgicek["pass"]   ?> </td>
     <td><a href="sil.php?id=<?php echo $bilgicek["id"]; ?>"> <button class="btn btn-outline-danger" >Sil</button></a></td>
     <td> <a href="duzenle.php?id=<?php echo $bilgicek["id"]; ?>"><button class="btn btn-outline-primary">Düzenle</button></a></td>
     
    
     </tr>
      

   <?php }  ?>
 


</table>



</body>
</html>