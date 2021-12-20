<?php 
include "./Functions/baglan.php";

if(isset($_GET["ekleme1"])){
  ?>
<script>
  alert("Bölüm eklendi");
</script>
<?php
} ?>


<?php if(isset($_GET["ekleme0"])){
  ?>
<script>
  alert("Bölüm ekleme başarısız");
</script>
<?php
} ?>

<?php if(isset($_GET["silme1"])){
  ?>
<script>
  alert("Bölüm pasif hale getirildi");
</script>
<?php
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bölüm Sayfası</title>
    <link href ="tailwind.css">
    
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);

* {
  font-family: Roboto;
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

  #customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
a:hover{
    color:white;
  }
  a{
    color:orange;
  }
</style>
</head>
<body>

<div class="sidenav right">
  <div class="nav "><div class="icon fa fa-home"></div><div class="description"><a href="./index.php">Anasayfa</a></div></div>
  <div class="nav "><div class="icon fa fa-book"></div><div class="description"><a href="./Calisan.php">Çalışanlar</a></div></div>
  <div class="nav active"><div class="icon fa fa-building"></div><div class="description"><a href="./Bolum.php">Bolumler</a></div></div>
  <div class="nav "><div class="icon fa fa-archive"></div><div class="description"><a href="./Proje.php">Projeler</a></div></div>
  <div class="nav "><div class="icon fa fa-users"></div><div class="description"><a href="./Gruplar.php">Gruplar</a></div></div>
  <div class="nav "><div class="icon fa fa-book"></div><div class="description"><a href="./Roller.php">Roller</a></div></div>
</div>
</div>

<div class="content">
  
<h3>Bölüm ekle</h3>
<form action="Functions/BolumEkle.php" method="post">

        <table>

        <td>
          <tr>
            Bölüm adı
          </tr>
          <tr> <input type="text" name="BolumAdı" id=""></tr>
</td>


        <td>
           <button type="submit">Ekle</button>
        </td>
        </table>


</form>
<hr>

<button type="submit"><a href="Bolum.php?list=aktif"> aktif</a></button>
<button type="submit"><a href="Bolum.php?list=pasif"> pasif</a></button>


<?php 
$query="Select *from bolum";
if($_GET["list"]=="aktif"){
  $query="SELECT * FROM bolum where Aktiflik=1";
}
if($_GET["list"]=="pasif"){
  $query="SELECT * FROM bolum where Aktiflik=0";
}



?>


<table id="customers">
  <tr>
  <td>Bolum adı</td>
  <td>Aktiflik</td>
  <td>Sil</td>
</tr>

  <?php 
   $getir=$db->prepare($query);
   $getir->execute(array(
));

while($bolum= $getir->fetch(PDO::FETCH_ASSOC) ){ ?>

<tr>
  <td><?php echo $bolum["BolumAdı"] ?></td>
  <td><?php echo $bolum["Aktiflik"] ?></td>
  <td><button type="submit"><a href="./Functions/BolumSil.php?id=<?php echo $bolum["BolumID"] ?>">Sil</a></button></td>
</tr>



 <?php
} ?>


  

</table>


</div>








</body>
</html>