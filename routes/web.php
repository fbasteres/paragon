<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::post('/register',[RegisterController::class,'register']);


Route::get('/login',[LoginController::class,'show'])-> name ('login');
Route::post('/login',[LoginController::class,'login']);

Route::get('/home',[HomeController::class,'index']) -> name ('inicio');

Route::get('/logout',[LogoutController::class,'logout'])-> name ('auth.logout');

/*Contenido */
Route::get('/users',[UserController::class,'index']) -> name ('users.list');



