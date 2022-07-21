# Laravel | Database

Tarih: 26/06/2022
Tip: KonuNotu

<aside>
💡 conf işlemi .env içinde

</aside>

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 //localhost
DB_PORT=3306  //xamp default localhost mysql port numarası
DB_DATABASE=first_app //db ismi 
DB_USERNAME=root  //user adı
DB_PASSWORD=
```

<aside>
💡 migration işlemi

</aside>

`php artisan migrate` ile migration yapılır fakat db oluşturulmuş olmalı

tablo oluşturma işlemi

```php
php artisan make:migration create_products_table --create=products
```

php artisan tinker ile konsoldan db ye erişim sağlanabilir

```php
DB::select('select * from products') //veya
DB::insert('insert into products (name,slug,price) values(?,?,?)' ,
 ['product 3','product-3',11] )
```

ef yapısına benzer komutlar (QUERY BUILDER YAPISI)

```php
DB::table("products")->get() //ürünleri getirir
```