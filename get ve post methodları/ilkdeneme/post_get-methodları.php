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


$userid=150;

echo $userid;
?>




<form action="islem.php" method="GET">

<input type="text" name="Ad" placeholder="ADINIZI GİRİNİZ">
<p></p>
<input type="text" name="Soyad" placeholder="SOYADINIZI GİRİNİZ">

<p></p>
<input type="submit" value="Gönder">

</form>

<a href="islem.php?userid=<?php echo $userid ?>"> <button>user delete</button></a>



</body>
</html>