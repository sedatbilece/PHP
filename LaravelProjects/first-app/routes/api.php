<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get ("/hello",function (){
    return ["user"=>"hello from restfull api "];
});

Route::get ("/users",function (){
    $users = DB::table('users')->get();
    return $users;

    
});

Route::get('/categories/costum1',[CategoryController::class,'costum1']);
Route::get('/categories/groups',[CategoryController::class,'groups']);

Route::get('/products/costum1',[ProductController::class,'costum1']);
Route::get('/products/costum2',[ProductController::class,'costum2']);

Route::get('/users/deneme',[UserController::class,'deneme']);

Route::apiResource('/products',ProductController::class);
Route::apiResource('/users',UserController::class);
Route::apiResource('/categories',CategoryController::class);
