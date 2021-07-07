<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<!-- actiona javascript:void(0) verilerek default post işlemi iptal edildi -->
<form action="javascript:void(0)" method="post" class="kayitformu">

<table>
<tr>
     <td> Ad: </td>
     <td> <input type="text" name="Ad" id=""></td>
</tr>
<tr>
     <td> Soyad: </td>
     <td> <input type="text" name="Soyad" id=""></td>
</tr>
<tr>
     <td> Yas: </td>
     <td> <input type="text" name="Yas" id=""></td>
</tr>

<tr>
     <td> </td>
     <td> <input type="submit" value="Gönder" onclick="kaydet()"> </td>
</tr>
</table>

</form>

<script>


function kaydet(){

    var tümbilgiler = $(".kayitformu").serialize();// tüm bilgiler gelir

    // tek tek değer almak
    var Ad=$("input[name=Ad]").val();
    var Soyad=$("input[name=Soyad]").val();
    var Yas=$("input[name=Yas]").val();

// boş dolu kontrolü
     if($.trim(Ad)==""){
         alert("ad boş olamaz");
     }
     else if($.trim(Soyad)==""){
        alert("Soyad boş olamaz");
     }
     else if($.trim(Yas)==""){
        alert("Yas boş olamaz");
     }
     else{

          $.ajax({
               type:"POST",
               url="islem.php",
               data:tümbilgiler,
               success:function(cevap){


                alert(cevap);
               }

          });

     }

}

</script>

<script src="../libraries/jquery-3.6.0.min.js"></script>
    <?php 
    
    
    
    
    
    
    ?>
</body>
</html>