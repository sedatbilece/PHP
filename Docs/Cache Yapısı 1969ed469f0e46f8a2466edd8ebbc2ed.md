# Cache Yapısı

Tarih: 17/05/2022
Tip: KonuNotu

<aside>
🍥 Açıklama

</aside>

cahce ile veri bellekte tutulur ve berlirli aralıklarla yenilenir ortak veri isteğinde cache te varsa ve süresi dolmamış ise cahce den veri aktarılır

<aside>
🍥 yok ise cache’e dosya alma işlemi

</aside>

```php
// oluşturma kısmı
$dosya = fopen($yol ,"w");

fwrite($dosya ,ob_get_contents());

fclose($dosya);

ob_end_flush();
```

<aside>
🍥 Cache kontrolü ve işlemleri

</aside>

```php
// CACHEDEN SAYFA KULLANIMI

//bilgiler alınıyor
$host = $_SERVER["HTTP_Host"];
$sayfa = $_SERVER["REQUEST_URI"];
$parametre = $_SERVER["QUERY_STRING"];

$sayfaAdi = md5($host.$sayfa.$parametre);//url hashleme

// yol oluşturma
$yol="cache/".$sayfaAdi."html";

$sure =10;

$hesapla = time()- $sure;

if (file_exists($yol) AND ($hesapla < filemtime($yol) )   ){// kontrol 

    include $yol;
    exit;
}
ob_start();
```