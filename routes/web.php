<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::resource('/', function () {
//    return view(DashboardController::class,'index');
//});


Route::controller(AdminController::class)->group(function () {
    Route::get('/','dashboard');
    Route::get('/account','account');
    Route::get('/account/{id}/edit','edit');
    Route::put('/account/{id}','update');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts','posts');
});

Route::resource('/category',CategoryController::class);

Route::controller(AuthController::class)->group(function () {
    Route::get('/login','index');
    Route::post('/login','authenticate');
});