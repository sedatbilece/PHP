# Php’de Güvenlik

Tarih: 18/05/2022
Tip: KonuNotu

<aside>
🛡️ Cross-Site Scripting(XSS)

</aside>

Genelde input açıkları ile sitenize script gömme işlemidir

```php
$ornek='<script> alert("siteye girildi")</script>';

echo $ornek;
// ornek değişkeninin input değerinden geldiğini varsayalım 
```

kontrol işlemi için `htmlspecialchars()` fonksiyonu ile etkisiz hale getirebilirz

---

<aside>
🛡️ SQL Injection Açığı

</aside>

Sql sorguları kullanılırken `Get` ile gelen parametreleri `query()` fonksiyonu ile değilde `prepare()` fonksiyonu ile işlemeliyiz .

🌟 sayfa.php?id=1 or 1=1 dendiğinde sql içine direk query ile verilirse login olunabilir

<aside>
🛡️ Dosya Uzantısı Kontrol Etmek

</aside>

```php
$dosya=$_FILES["dosya"]["tmp_name"];

// dosya tipi alma
$dosyatipi=$_FILES["dosya"]["type"];
$tipal=explode("/",$dosyatipi);
$uzanti=$tipal[1];

$dosya_yeni="uploaded_".rand(0,100).".".$uzanti;

echo $dosya_yeni;echo "<br>";

$gecerliTipler =array(// DOSYA TIPLERI KONTROL EDILMELIDIR
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
```