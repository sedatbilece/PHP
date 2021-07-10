<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <style> 



</style>
</head>
<body>
    <?php 
    require_once "baglan.php";
    ?>

<hr>
<h4>Kayit DUZENLEME</h4>
<hr>


<?php 


$name_pass_sor = $db->prepare ("SELECT *from name_pass where id=:xid");


$name_pass_sor-> execute(array(

    "xid"=> $_GET["id"]

)); 

$bilgicek= $name_pass_sor->fetch(PDO::FETCH_ASSOC);
?>


<form action="update-islem.php" method="POST">

<input type="text" name="Ad" placeholder="ADINIZI GİRİNİZ" value=<?php echo $bilgicek["name"] ?>  > 
<p></p>
<input type="text" name="Sifre" placeholder="SIFRE GİRİNİZ"  value=<?php echo $bilgicek["pass"] ?>  >

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









</body>
</html>