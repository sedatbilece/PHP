<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="javascript:void(0)"  class="kayitformu" method="POST">

                   <input type="text" value="konu"  id="konu" name="konu" >
                   <textarea name="textmesaj" id="mesaj" cols="30" rows="10" ></textarea>
                   <button type="submit" name="mesajbut" onclick="Save()" >gönder</button>
    

</form>



<script src="jquery-3.6.0.min.js"></script>
<script>



function Save() {
    BlockModal();

    var tümbilgiler = $(".kayitformu").serialize();// tüm bilgiler gelir

    

  

    $.ajax({
        type: 'post',
        url: 'islem.php',
        
        data: tümbilgiler,
        success: function (result) {
           alert("başarılı");
            
        },
        error: function (err) {
            alert("başarısız");
        }
    });
}
</script>



</body>
</html>