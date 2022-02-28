<?php

use App\Http\Controllers\ComodityController;
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

Route::get('/home', function () {
    return view('welcome');
});
Route::prefix("products")->group(function(){
   Route::get("/index",[ComodityController::class,"index"])->name("products.index");
   Route::get('/{$id}/index',[ComodityController::class,"delete"])->name("products.delete");
   Route::get("/create",[ComodityController::class,"create"])->name("products.create");
   Route::get('/{$id}/show',[ComodityController::class,"show"])->name("products.show");
   Route::get("/index",[ComodityController::class,"index"])->name("products.index");
   Route::get("/index",[ComodityController::class,"index"])->name("products.index");
});
