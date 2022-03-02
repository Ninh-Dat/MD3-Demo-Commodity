
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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


Route::middleware('checkAuth')->group(function (){

    Route::get('/home',[ProductController::class,'home'])->name('welcome');

    Route::prefix("products")->group(function(){
        Route::get("/index",[ProductController::class,"index"])->name("products.index");
        Route::get('/{id}/destroy',[ProductController::class,"destroy"])->name("products.delete");
        Route::get('/{id}/show',[ProductController::class,"show"])->name("products.show");
        Route::get("/create",[ProductController::class,"create"])->name("products.create");
        Route::post("/create",[ProductController::class,"store"])->name("products.store");
        Route::post("/{id}/update",[ProductController::class,"update"])->name("products.update");
        Route::get("/{id}/update",[ProductController::class,"edit"])->name("products.edit");
    });
});


Route::get("/register",[AuthController::class,'showForm'])->name("showForm");
Route::post("/register",[AuthController::class,'register'])->name("register")->middleware('checkRegister');

Route::get("/login",[AuthController::class,'showFormLogin'])->name("showFormLogin");
Route::post("/login",[AuthController::class,'login'])->name("login");


Route::get('/logout',[AuthController::class,'logout'])->name('logout');

?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
