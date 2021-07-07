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
<script>
function fgönder(){


    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="">Why do I have this issue?</a>'
});


}


</script>

<script src="libraries/jquery-3.6.0.min.js"> </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>