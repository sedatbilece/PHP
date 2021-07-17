<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action=""  class="mesajform" method="POST" id="mesajform">

                   <input type="text" value="konu"  id="konu" name="konu" >
                   <textarea name="textmesaj" id="mesaj" cols="30" rows="10" ></textarea>
                   <button type="submit" name="mesajbut" >gönder</button>
    

</form>



<script src="jquery-3.6.0.min.js"></script>



<script type="text/javascript">


$(document).ready(function(){


     $("#mesajform").submit(){

          var bilgiler= $(".mesajform").serialize();



           $.ajax({
              type:"POST",
              url:"islem.php",
              data:bilgiler,
              success: function(data){
                  veri=JSON.parse(data);
                  alert(veri.message+"  "+veri.status);
              },
              error: function(data){
                  veri=JSON.parse(data);
                  alert(veri.message+"  "+veri.status);
              }



           });

           return false;
     };

});

</script>



</body>
</html>