<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
   <button type="submit" id="tıkla" name="buton">tıkla git</button>
</form>
    

</body>
<script>
const tikla=document.getElementById("tıkla");

tıkla.addEventListener("click",function (){

    alert("butona tıklandı");

});

<?php 

if(isset($_POST["buton"]) ){

    header("Location:http://localhost:3000/y%C3%B6nlendirme/ayar.php");
}


?>

</script>
</html>