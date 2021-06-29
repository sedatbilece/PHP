<html>
 <head>
  <title>PHP Denemesi</title>
  <meta charset="utf-8">
 </head>
 <body>


 <?php 
 //yorum satırı
  #yorum satırı

  /*
  yorum paragrafı
  a
  a
  a
  */

  echo "hello world";
 
  echo "<p>asdasd222</p>";
 
  print "deneme    ";


 echo "sedat " . "bilece";# . birleştirme op.
  

# değişkenler $ işareti ile başlar

 $ad = "__sedat__";

 $yas=500;


echo " <p></p>";
 echo $yas;

 echo $ad;
 echo " <p></p>";

 echo $ad.$yas;

$yazi=$ad.$yas;
echo " <p>---</p>";
echo $yazi;
 
 ?>
 <p></p>
asd

  
 asdasdasd
<p></p>
 <?php 
 
 # Matematiksel işlemler
 
 $n1=40;
$n2=50;
$toplam=$n1+$n2;


echo $toplam;

if($toplam>80){
    echo "yazdir";
}

echo rand(0,10);

echo "-----------------------<p></p> ";
# çift ve tek tırnak farkları 

echo "toplam : $toplam";# değişken yerine geçer
echo 'toplam : $toplam'; # string yerine geçer

echo "ben $ad \"asd\" sadasd";
 
$yazi="Hepsi BüYÜk Harfler İleE";

$yazi=strtolower($yazi);

echo $yazi;

$yazi=substr($yazi,0,10);# istenen karakterleri alır

echo "<p> $yazi </p> ";
 
 ?>
 </body>
</html>