<?php 

echo "<pre>";

print_r($_FILES);


$dosya=$_FILES["dosya"]["tmp_name"];


// dosya tipi alma
$dosyatipi=$_FILES["dosya"]["type"];
$tipal=explode("/",$dosyatipi);
$uzanti=$tipal[1];

$dosya_yeni="uploaded_".rand(0,100).".".$uzanti;

echo $dosya_yeni;echo "<br>";

$gecerliTipler =array(
                 "image/png",
                 "image/jpg",
                 "image/jpeg",
                 "image/gif"
      
);

if (in_array($dosyatipi,$gecerliTipler)){

    if(move_uploaded_file($dosya,"dosya/".$dosya_yeni)){

        echo "dosya yüklendi";
    
    }
    else {
        echo "dosya yükleme başarısız";
    }
}
else {

    echo "Sadece PNG , JPG , GIF yüklenebilir.";
}






?>