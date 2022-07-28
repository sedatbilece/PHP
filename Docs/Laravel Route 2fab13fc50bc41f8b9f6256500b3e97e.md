# Laravel | Route

Tarih: 26/06/2022
Tip: KonuNotu

web veya api için farklı route sayfaları var başlangıçta örnekler web için verilecek 

```php
Route::get('/', function () {
    return view('welcome');
});
```

verilen fonksiyon view içinde welcome sayfasını “/” yani anadizinde döndürür.

```php
Route::get('/merhaba', function () {
    return "Hello from API";
});
```

kendimizde string veya dizi dönebiliriz dönülen diziler json formatına dönüştürülür

```php
Route::get('/merhaba-json', function () {
    return ["message"=>"HELLO SWEATHEART","message2"=>"welcome to laravel api"];
});
```

<aside>
💡 API URLS

</aside>

```php
Route::get('/product/{id?}', function ($id=null) {
               if($id==null){
                return "Parametre verilmedi !!! ";
               }
              return "Product id: $id "; 
});
```

`?` ile zorunlu olmadığı bildirilir ama fonksiyona verileceği için default değer tanımlanmalıdır

<aside>
💡 redirect işlemi

</aside>

```php
Route::get('/category/{id}', function ($id=null) {
    
   return "category id : $id";
})->name("category.show");//url redirect için adı

Route::get('/categorygetir', function () {//categorygetir deyince redirecct ile verilen addaki urle gidilecek 
    
    return redirect()->route("category.show",["id"=>21]);
 });
```

<aside>
💡 gruplama

</aside>

```php
Route::prefix("basics")->group(function(){

Route::get('/merhaba', function () {
        return "Hello from API";
    });
Route::get('/merhaba', function () {
        return "Hello from API";
    });
......
//içinde yazılarak /basics/merhaba ile gruplanırlar

});
```