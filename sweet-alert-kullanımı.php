<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


  <div class="container m-5">
  
  <table>
    
    <tr>
    <td>
    AD:
    </td>
    <td>
    <input type="text" name="" id="">
    </td>
    </tr>

     <tr>
     <td></td>
     </tr>

    <tr>
    <td>
    Sifre:
    </td>
    <td>
    <input type="password" name="" id="">
    </td>
    </tr>

<tr><td></td></tr>

    <tr>
    <td>
    
    </td>
    <td>
    <input type="submit" name="" id="" class="btn btn-primary" onclick="fgönder()">
    </td>
    </tr>
    
    </table>
  </div>

  <input type="submit" name="" id="" class="btn btn-primary" onclick="fgönder2()" value="tek satırlık">
<br> <br>


<input type="submit" name="" id="" class="btn btn-primary" onclick="fgönder3()" value="sag ust onay">
<br> <br>

<input type="submit" name="" id="" class="btn btn-primary" onclick="fgönder4()" value="resimli">
<br> <br>


<input type="submit" name="" id="" class="btn btn-primary" onclick="fgönder5()" value="normal alert">
<br> <br>

<script>

function fgönder5(){

alert("normal alert")

}


function fgönder4(){

  Swal.fire({
  title: 'Sweet!',
  text: 'Modal with a custom image.',
  imageUrl: 'https://unsplash.it/400/200',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
}


function fgönder3(){
  Swal.fire({
  position: 'top-right',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
}

function fgönder2(){
  Swal.fire('tek satırlık mesaj')
}
function fgönder(){

  Swal.fire({
  title: 'değiştirilsin mi?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `asd`,
  denyButtonText: `Don't asd`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'error')
  }
})


}


</script>

<script src="libraries/jquery-3.6.0.min.js"> </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>