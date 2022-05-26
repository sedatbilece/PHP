<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="javascript:void(0)" method="post" id="kayitform">
<input type="hidden" name="islem" value="kayit">

<table>
    <tr>
        <td>ad</td>
        <td><input type="text" name="ad" id=""></td>
    </tr>
    <tr>
        <td>soyad</td>
        <td><input type="text" name="soyad" id=""></td>
    </tr>
    <tr>
        <td>cinsiyet</td>
        <td>
            <select name="cinsiyet" id="">
            <option value="-1">Cinsiyet Seç</option>
                <option value="kiz">KIZ</option>
                <option value="erkek">ERKEK</option>
            </select>
        </td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><button  onclick="Kaydet()">Gönder</button></td>
    </tr>


</table>

</form>


<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

<script>

function Kaydet(){

    var bilgiler= $("#kayitform").serialize();
    $.ajax({
        type:"POST",
        url:"islem.php",
        data:bilgiler,
        success:function(cevap){
               alert(cevap);
        }
    })


}

</script>

</body>
</html>