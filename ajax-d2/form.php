<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="javascript:void(0)"  class="mesajform" method="POST" id="mesajform">

                   <input type="text"   id="konu" name="konu" placeholder="konu">
                   <textarea  name="mesaj" id="mesaj" cols="30" rows="10" placeholder="mesajınız">   </textarea>

                   <input type="hidden" name="islem" value="kayit">
                   <button type="submit" name="mesajbut" onclick="save();">gönder</button>
    

</form>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script type="text/javascript">

function save(){

var bilgiler= $(".mesajform").serialize();


$.ajax({
type:"POST",

url:"islem.php",

data:bilgiler,

success:function(cevap){
    alert(cevap);
}


});



}

</script>



</body>
</html>