# SEF (Search Engine Friendly URL)

Tarih: 19/05/2022
Tip: KonuNotu

<aside>
🔗 SEF kurulumu

</aside>

`apache` içindeki `httpd.conf` dosyasını aç

`#LoadModule rewrite_module modules/mod_rewrite.so` arat ve `#` işaretini kaldır

SEF işlemleri için .`htaccess` adında dosya oluşturulmalı

<aside>
🔗 Optionlar

</aside>

L: önceki ayarları umursama

NC : küçük büyük harf duyarsız yap

R: Browserda adres değişse bile arkaplanda değiştirme

OR : veya

<aside>
🔗 Tanımlama (.htaccess içine)

</aside>

```php
Options +FollowSymlinks
RewriteEngine On
RewriteRule ^yeni.html$ index.php [L]
// yeni.html yazılınca index.php çalışır
```