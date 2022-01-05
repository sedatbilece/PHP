<?php 
include "./baglan.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeler Sayfası</title>
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
  a:hover{
    color:white;
  }
  a{
    color:orange;
  }
  .bosluk{
    margin-top: 20px;
  }
  .buton{
    background-color:#FF5722;
    padding: 10px;
    border-radius: 10px;
    border: none;

  }
  .buton:hover{
    background-color:black;
    color:white;
    box-shadow: 0.5px 0.5px 1px 1px;
  }
  td{
      margin-top: 40px;
  }
  table, th, td {
    padding: 10px;
  border: 1px solid black;
}
table {
  width: 75%;
  border-collapse: collapse;
}
a:hover{
  text-decoration: none;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>

<div class="sidenav right">
  <div class="nav "><div class="icon fa fa-home"></div><div class="description"><a href="../index.php">Anasayfa</a></div></div>
  <div class="nav "><div class="icon fa fa-book"></div><div class="description"><a href="../Calisan.php">Çalışanlar</a></div></div>
  <div class="nav"><div class="icon fa fa-building"></div><div class="description"><a href="BolumSil.php">Bolumler</a></div></div>
  <div class="nav active"><div class="icon fa fa-archive"></div><div class="description"><a href="../Proje.php">Projeler</a></div></div>
  <div class="nav "><div class="icon fa fa-users"></div><div class="description"><a href="../Gruplar.php">Gruplar</a></div></div>
  <div class="nav "><div class="icon fa fa-book"></div><div class="description"><a href="../Roller.php">Roller</a></div></div>
</div>

<div class="content">
  

<?php 

$projeid=$_GET["id"];


$getir=$db->prepare("select * from proje where ProjeID=:a");
   $getir->execute(array(
          "a"=>$projeid
));
while($kayit= $getir->fetch(PDO::FETCH_ASSOC) ){ 
  
  $pid=$kayit["ProjeID"] ; 
  ?>



<h3> Proje Adı : <?php echo $kayit["ProjeAdı"] ?></h3>

<?php     } ?>
<hr>
<h4>Projeye Çalışan ekle</h4>

<form action="Functions/projecalisani.php" type="POST">

<select name="SorumluID" id="" class="bosluk">
    <option value="0">Çalışan Seçiniz</option>
<?php 
$getir=$db->prepare("select * from calisan where Aktiflik=1 AND RolID>2");
$getir->execute(array(
));
while($kayit= $getir->fetch(PDO::FETCH_ASSOC) ){ ?>

<option value=<?php echo $kayit["CalisanID"] ?> > <?php echo $kayit["Ad"];echo " ";echo $kayit["Soyad"] ?> </option>

<?php
} ?>
</select>
<br>

<button type="submit" class="bosluk buton">Ekle</button>
</form>



<h4> Projece Çalışanların Listesi</h4>


<table id="customers">
  <tr>
  <td>Çalışan Adı</td>
  <td>Çalışan Soyadı</td>
  <td>Mail</td>
  <td>Tel</td>

</tr>

  <?php 



$getir=$db->prepare("SELECT * From calisan   where CalisanID IN
(SELECT CalisanID from projecalisani where ProjeID=:a)");
   $getir->execute(array(
       "a"=>$projeid
));

while($kayit= $getir->fetch(PDO::FETCH_ASSOC) ){ ?>

<tr>
  <td><?php echo $kayit["Ad"] ?></td>
  <td><?php echo $kayit["Soyad"] ?></td>
  <td><?php echo $kayit["Mail"] ?></td>
  <td><?php echo $kayit["Tel"] ?></td>
  
</tr>



 <?php
} ?>


  

</table>


</div>








</body>
</html>