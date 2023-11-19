<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Permission\PermissionController;
use App\Http\Controllers\Roles\RoleController;
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


Route::get('/register',[RegisterController::class,'show']);
Route::post('/register',[RegisterController::class,'register']);


Route::get('/login',[LoginController::class,'show'])-> name ('login');
Route::post('/login',[LoginController::class,'login']);

Route::get('/home',[HomeController::class,'index']) -> name ('inicio');

Route::get('/logout',[LogoutController::class,'logout'])-> name ('auth.logout');

/*Contenido */
Route::resource('permissions', PermissionController::class) -> names ('admin.permissions');
Route::resource('roles', RoleController::class) -> names ('admin.roles');
Route::resource('users', UserController::class) -> names ('admin.users');



