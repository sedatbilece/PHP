<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>

    <style>

        .aralik{

            margin-top: 20px;
        }
        .mailonay{
            color: lightblue;
            border: 2px solid lightseagreen;
        }
    </style>
</head>
<body>
    



<form action="javascript:void(0)" method="post" class="mesajform" name="mesajform">


<input type="text" name="isim" placeholder="isim gir" class="aralik" required>
<br>
<input type="email" name="eposta" placeholder="eposta gir" class="aralik" required>
<br>
<input type="password" name="sifre" placeholder="sifre gir" class="aralik" required>
<br>
<input type="hidden" name="islem" value="kayit">
<input type="submit" value="Kayıt" class="aralik" name="kayitbutonu" onclick="save();" id="kayitbutonu">

</form>


<div class="response"></div>

<?php 

if(isset($_GET["aktivaaktivasyonmaili"])){
    if($_GET["aktivaaktivasyonmaili"]=="ok"){  ?>


<div class="mailonay">

aktivasyon maili e posta adresinize gönderilmiştir .
<br>
Lütfen kontrol ederek hesabınızı onaylayınız
</div>

<?php
    }
    else{?>

<div class="mailonay" >
    Hatalı işlem gerçekleşti !!!
</div>

<?php  
    }
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script type="text/javascript">


function save(){
    
var bilgiler= $(".mesajform").serialize();




        document.getElementById("kayitbutonu").disabled = true; 
    $.ajax({
type:"POST",

url:"islem.php",

data:bilgiler,

success:function(cevap){   
    alert(cevap);

},
error:function(cevap){
    alert(cevap);
}



});



      


  







}

</script>

</body>
</html>