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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="sweetalert2.min.css">
<style>

    .ortala{
        width: 50%;
        margin-left: 25%;
    }
    .bosbirak{
        margin-top: 5%;
    }
    .yasla{
        float:right;
    }
</style>

</head>
<body>
    
<?php 

if($_GET["silme"]=="ok"){?>


<script>
Swal.fire('Soru Silindi');
  
</script>


<?php
}
?>




<div class="ortala">

<?php while($mescek= $mesajsor->fetch(PDO::FETCH_ASSOC) ) { ?>



    <div class="card bosbirak">
  <div class="card-header">
  Konu: <?php  echo $mescek["mesajlar_konu"] ?>  |    Tarih : <?php echo $mescek["mesajlar_zaman"] ?>  
  <a href="islem.php?id=<?php echo $mescek["mesajlar_id"]  ?>&Sorusil=ok" class="btn btn-danger yasla">Sil</a>
  </div>
  <div class="card-body">
   
    <p class="card-text"><?php echo  $mescek["mesajlar_mesaj"] ?></p>
    
  </div>
</div>



    <?php } ?>
</div>

<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>