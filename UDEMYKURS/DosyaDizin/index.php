<?php


/*
//DOSYA AÇMA İŞLEMİ
$snc= touch("deneme.txt");

if($snc){
    echo "dosya oluşturuldu <br>";

}
else {
    echo "dosya oluşturma başarısız <br>";
}
*/


/*
//DOSYA İÇERİK YAZMA 
$olustur=fopen("icerik.txt","a+");// a kiipi sürekli üzerine ekler
$icerik="Hello world ! \n alt satira inildi\n";

$islem =fwrite($olustur,$icerik);

if($islem){
    echo "dosya okundu oluşturuldu <br>";
}
else{

    echo "dosya okundu başarısız <br>";
}
*/

/*
//DOSYA OKUMA İŞLEMİ
$dosyaOku=fopen("icerik.txt","rb");

//echo fread($dosyaOku,filesize("icerik.txt"));

while( !feof($dosyaOku) ){
    echo fgets($dosyaOku)."<br>";
}


fclose($dosyaOku);
*/


/*
//DOSYA VARLIK KONTROLÜ
if(  file_exists("icerik.txt")     ){
    echo "dosya VAR <br>";
}
else{

    echo "dosya YOK <br>";
}
*/


//rename("icerik.txt","yeniad.txt"); //ad değiştirme 

//unlink("deneme.txt");  //silme işlemi


//mkdir("dizin",0777);

/*
//DİZİN OKUMA İŞLEMİ (eski metod)
$dizin= opendir("dizin");

while (  ($dosyalar=readdir($dizin)) !== FALSE   ){

    echo $dosyalar."<br>";
}
closedir($dizin);
*/

$dizinler=scandir("./"); //dizi döner

echo "<pre>";
print_r($dizinler);

foreach ($dizinler as $eleman){

    echo $eleman." dosya : ".is_file($eleman)."<br>";
    echo $eleman." dizin : ".is_dir($eleman)."<br>";
}

?>