<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix("basics")->group(function(){// /basics/yapi şeklinde gruplamak için kullanılır


    Route::get('/', function () {
        return view('welcome');
    });
    
    
    Route::get('/merhaba', function () {
        return "Hello from API";
    });
    
    Route::get('/merhaba-json', function () {
        return ["message"=>"HELLO SWEATHEART","message2"=>"welcome to laravel api",["listtolist"=>"deneme"]];
    });
    
    Route::get('/merhaba-json2', function () {
        return response( ["message"=>"HELLO SWEATHEART"],200)->content('Content-type','text/plain') ;
    });
    Route::get('/merhaba-json3', function () {
        return response()->json(["message"=>"HELLO SWEATHEART"]);
    });
    
    Route::get('/product/{id?}', function ($id=null) {
                   if($id==null){
                    return "Parametre verilmedi !!! ";
                   }
                  return "Product id: $id "; 
    });
    
    Route::get('/category/{id}', function ($id=null) {
        
       return "category id : $id";
    })->name("category.show");//url redirect için adı
    
    
    Route::get('/categorygetir', function () {//categorygetir deyince redirecct ile verilen addaki urle gidilecek 
        
        return redirect()->route("category.show",["id"=>21]);
     });

     

});

