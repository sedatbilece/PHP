
<?php 
include "./Functions/baglan.php";

if(isset($_GET["ekleme1"])){
  ?>
<script>
  alert("Çalışan eklendi");
</script>
<?php
} ?>


<?php if(isset($_GET["ekleme0"])){
  ?>
<script>
  alert("Çalışan ekleme başarısız");
</script>
<?php
} ?>


<?php if(isset($_GET["silme1"])){
  ?>
<script>
  alert("Çalışan Çıkarıldı");
</script>
<?php
} ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çalışanlar Sayfası</title>
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
  
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 6px 0px rgba(0,0,0,0.2);
  padding: 6px 8px;
  z-index: 1;
  margin-top: 10px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.droop{
  background-color: yellow;
  padding: 10px;
  margin-top: 20px;
  border-radius: 10%;
}

.infomassage{
  display: inline-block;
  padding: 20px;
  border-radius: 15px;
  background-color: #5BF983;
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
  .bosluk{
    margin-top: 10px;
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
  <div class="nav "><div class="icon fa fa-home"></div><div class="description"><a href="./index.php">Anasayfa</a></div></div>
  <div class="nav active"><div class="icon fa fa-book"></div><div class="description"><a href="./Calisan.php">Çalışanlar</a></div></div>
  <div class="nav"><div class="icon fa fa-building"></div><div class="description"><a href="./Bolum.php">Bolumler</a></div></div>
  <div class="nav "><div class="icon fa fa-archive"></div><div class="description"><a href="./Proje.php">Projeler</a></div></div>
  <div class="nav "><div class="icon fa fa-users"></div><div class="description"><a href="./Gruplar.php">Gruplar</a></div></div>
  <div class="nav  "><div class="icon fa fa-book"></div><div class="description"><a href="./Roller.php">Roller</a></div></div>
</div>

<div class="content">

<form action="Functions/CalisanEkle.php" method="post">
<h3>Çalışan Ekle</h3>

    
  <input type="text" name="Ad" id="" placeholder="Ad" class="bosluk" >
<br>
<input type="text" name="Soyad" id="" placeholder="Soyad" class="bosluk" >
<br>
<input type="text" name="Mail" id="" placeholder="Mail" class="bosluk" >
<br>
<input type="text" name="Tel" id="" placeholder="Tel" class="bosluk" >

<br>
<select name="BolumID" id="" class="bosluk" >
    <option value="0">Bölüm seçiniz</option>
<?php 
$getir=$db->prepare("select * from bolum where Aktiflik=1");
$getir->execute(array(
));
while($kayit= $getir->fetch(PDO::FETCH_ASSOC) ){ ?>

<option value=<?php echo $kayit["BolumID"] ?> > <?php echo $kayit["BolumAdı"] ?> </option>

<?php
} ?>
</select>
<br>
<select name="RolID" id="" class="bosluk" >
    <option value="0">Rol seçiniz</option>
<?php 
$getir=$db->prepare("select * from rol");
$getir->execute(array(
));
while($kayit= $getir->fetch(PDO::FETCH_ASSOC) ){ ?>

<option value=<?php echo $kayit["RolID"] ?> > <?php echo $kayit["RolAdı"] ?> </option>

<?php
} ?>
</select>
      
 
<br>
   <button type="submit" class="buton bosluk">Ekle</button>




</form>

<hr>
<br>
<div class="dropdown">
  <span class="droop">Görüntüleme filtresi seç</span>
  <div class="dropdown-content">
    <a href="Calisan.php?filtre=eski">eski çalışanları getir</a>
    <a href="Calisan.php?filtre=yeni-eski">çalışan yeniden eskiye</a>
    <a href="Calisan.php?filtre=eski-yeni">çalışan eskiden yeniye</a>
    
  </div>
</div>

<?php 
$querydesc="";
if($_GET["filtre"]=="eski"){

  $querydesc="Eski çalışanlar getirildi";

}
else if($_GET["filtre"]=="eski-yeni"){

  $querydesc="Çalışanlar eskiden yeniye sıralı şekilde getirildi";
}
else if($_GET["filtre"]=="yeni-eski"){

  $querydesc="Çalışanlar  yeniden eskiye sıralı şekilde getirildi";
}

?>
<br>
<br>
<div class="infomassage">
  <?php echo $querydesc; ?>
</div>

<br>
<br>
<br>

<table id="customers">
  <tr>
  <td>Çalışan Adı</td>
  <td>Çalışan Soyadı</td>
  <td>Mail</td>
  <td>Tel</td>
  <td>Bolum Adı</td>
  <td>Rolü</td>
  <td>Sil</td>
</tr>

  <?php 
$query="SELECT * From calisan LEFT JOIN bolum ON calisan.BolumID =bolum.BolumID LEFT JOIN rol ON calisan.RolID =rol.RolID ORDER BY calisan.CalisanID asc";


if($_GET["filtre"]=="eski"){

  $query="SELECT * From calisan  LEFT JOIN bolum ON calisan.BolumID =bolum.BolumID LEFT JOIN rol ON calisan.RolID =rol.RolID where calisan.Aktiflik=0";

}
else if($_GET["filtre"]=="eski-yeni"){

  $query="SELECT * From calisan LEFT JOIN bolum ON calisan.BolumID =bolum.BolumID LEFT JOIN rol ON calisan.RolID =rol.RolID ORDER BY calisan.CalisanID asc";

}
else if($_GET["filtre"]=="yeni-eski"){
  $query="SELECT * From calisan LEFT JOIN bolum ON calisan.BolumID =bolum.BolumID LEFT JOIN rol ON calisan.RolID =rol.RolID ORDER BY calisan.CalisanID desc";
}





   $getir=$db->prepare($query);
   $getir->execute(array(
));

while($kayit= $getir->fetch(PDO::FETCH_ASSOC) ){ ?>

<tr>
  <td><?php echo $kayit["Ad"] ?></td>
  <td><?php echo $kayit["Soyad"] ?></td>
  <td><?php echo $kayit["Mail"] ?></td>
  <td><?php echo $kayit["Tel"] ?></td>
  <td><?php echo $kayit["BolumAdı"] ?></td>
  <td><?php echo $kayit["RolAdı"] ?></td>
  <td><button type="submit"><a href="./Functions/CalisanSil.php?id=<?php echo $kayit["CalisanID"] ?>">Sil</a></button></td>
</tr>



 <?php
}//asddeneme ?>


  

</table>




</div>








</body>
</html>