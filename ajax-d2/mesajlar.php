<?php 


try{
    $url="mysql:host=localhost;dbname=giris;charset=utf8";
    $name="root";
    $password="12345678";


# temel bağlantı işlemi
$db=new PDO($url,$name,$password);

}

catch(PDOException $e){


echo $e->getMessage();# hata mesajını döndürür

}



$mesajsor=$db->prepare("SELECT * FROM mesajlar ORDER BY mesajlar_id DESC");

$mesajsor->execute();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

    .ortala{
        width: 50%;
        margin-left: 25%;
    }
</style>

</head>
<body>
    


<div class="ortala">

<?php while($mescek= $mesajsor->fetch(PDO::FETCH_ASSOC) ) { ?>



Konu: <?php  echo $mescek["mesajlar_konu"] ?> || <?php echo $mescek["mesajlar_zaman"] ?>
<br>
<?php echo  $mescek["mesajlar_mesaj"] ?>
<hr>




    <?php } ?>
</div>



</body>
</html>