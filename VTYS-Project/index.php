
<?php 

include "./Functions/baglan.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link href ="tailwind.css">
    
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);

* {
  font-family: Roboto;
}

a:hover{
  text-decoration: none;
}
a{
  text-decoration: none;
}
body {
  margin: 0px;
  padding: 0px;
  overflow-x: hidden;
}

  .sidenav {
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: absolute;
    right: 0px;
    top: 0px;
    height: 100%;
    width: 60px;
    background: #333;
  }
  
  
    .sidenav .nav {
      position: relative;
      display: flex;
      align-items: center;
      z-index: 1000;
      left: 0px;
      transition: all 0.4s ease;
      cursor: pointer;
    }

    .sidenav .nav.active {
      left: -10px;
    }

    .sidenav .nav:hover {
      left: -85px;      /* Border width*2 */
    }

      .sidenav .description, .sidenav .icon {
        height: 60px;
        line-height: 60px;
        background: #333;
      }

      .sidenav .nav.active .description, .sidenav .nav.active .icon {
        background: #FF5722;
      }

      .sidenav .icon {
        width: 60px;          /* Width of navbar */
        text-align: center;
        color: #e9e9e9;
        font-size: 25px;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }

      .sidenav .description {
        position: relative;
        left: 60px;
        color: #eee;
        min-width: 80px;
        padding-left: 20px;
        height: 100%;
      }

  .content {
    position: absolute;
    left: 0px;
    padding-left: 40px;
    padding-top: 40px;
    top: 0px;
    right: 60px;        /* Width of navbar */
    height: 100%;
    z-index: 10;
    background: #F7F5F5;
  }
  a:hover{
    color:white;
  }
  a{
    color:orange;
  }

  .grid-container {
    width: 90%;
  display: grid;
  grid-template-columns: auto auto auto;
  
  padding: 10px;
}
.grid-item {
  
box-shadow: 0.5px 1px 3px 3px rgba(0,0,0,0.2);
  padding: 80px;
  margin: 10px;
  font-size: 20px;
  text-align: center;
  border-radius: 20px;
}


  
</style>
</head>
<body>

<div class="sidenav right">
  <div class="nav active"><div class="icon fa fa-home"></div><div class="description"><a href="./index.php">Anasayfa</a></div></div>
  <div class="nav "><div class="icon fa fa-book"></div><div class="description"><a href="./Calisan.php">Çalışanlar</a></div></div>
  <div class="nav"><div class="icon fa fa-building"></div><div class="description"><a href="./Bolum.php">Bolumler</a></div></div>
  <div class="nav "><div class="icon fa fa-archive"></div><div class="description"><a href="./Proje.php">Projeler</a></div></div>
  <div class="nav "><div class="icon fa fa-users"></div><div class="description"><a href="./Gruplar.php">Gruplar</a></div></div>
  <div class="nav "><div class="icon fa fa-book"></div><div class="description"><a href="./Roller.php">Roller</a></div></div>
</div>

<div class="content">
  

<div class="grid-container">
  <div class="grid-item">

Şirketteki çalışan sayısı:
<br>
<?php 

$getir=$db->prepare("select COUNT(*) as sayi from calisan where Aktiflik=1");
$getir->execute(array(
));
$count =$getir->fetchColumn();

echo $count;


?>


  </div>
  <div class="grid-item">

  Şirketteki  Aktif Proje sayısı:
<br>
<?php 

$getir=$db->prepare("select COUNT(*) as sayi from proje where Aktiflik=1");
$getir->execute(array(
));
$count =$getir->fetchColumn();

echo $count;


?>

  </div>


  <div class="grid-item">
Şirketteki Bölüm sayısı:
<br>
<?php 

$getir=$db->prepare("select COUNT(*) as sayi from bolum where Aktiflik=1");
$getir->execute(array(
));
$count =$getir->fetchColumn();

echo $count;


?>


  </div>  

</div>


<hr>
ek alan
</div>








</body>
</html>