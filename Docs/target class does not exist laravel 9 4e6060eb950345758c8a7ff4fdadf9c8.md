# target class does not exist. laravel 9

Tarih: 04/07/2022
Tip: Hata

**App\Providers\RouteServiceProvider içine namespace() kısımlarını ekleyince düzeldi**

```
    $this->routes(function () {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->namespace('App\\Http\\Controllers')  <------------ Add this
            ->group(base_path('routes/api.php'));

        Route::middleware('web')
            ->namespace($this->namespace)
            ->namespace('App\\Http\\Controllers') <------------- Add this
            ->group(base_path('routes/web.php'));
    });
}

```