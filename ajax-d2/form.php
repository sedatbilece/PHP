<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="sorusor.css">
</head>
<body>
    

<div class="container">
  <div class="row">
    <div class="col">
    
    </div>
    <div class="col-6 ">
<div class="bosluk">

</div>

    <form action="javascript:void(0)"  class="mesajform " method="POST" id="mesajform">
                       
<table>

<tr>
    <td>
    <label for="konu" class="input-group-text">Konu</label>
    </td>
    <td>
    <input type="text"   id="konu" name="konu" class="form-control">
    </td>
</tr>

<tr>
    <td>
    <label for="mesaj" class="input-group-text">Sorunuz? *</label>
    </td>
    <td>
    <textarea  name="mesaj" id="mesaj" cols="30" rows="10" class="form-control" required="required"></textarea>
    </td>
</tr>



<tr>
    <td>
    <a href="mesajlar.php">liste</a>
    </td>
    <td>
    <button type="submit" name="mesajbut" onclick="save();" class="btn btn-primary">gönder</button>
    </td>
</tr>


</table>
           <input type="hidden" name="islem" value="kayit">

                       </form>
               
    </div>
    <div class="col">
    
    </div>
  </div>






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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>