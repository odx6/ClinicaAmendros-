<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use  App\Http\Controllers\RegisterController;
use  App\Http\Controllers\SessionController;
use  App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('Home');
})->middleware('auth')->name('Home');
#Routes module register
Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
#Routes  module login
Route::get('/login',[SessionController::class,'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.logout');
#Routes Admin 

Route::get('/Admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

//prueba 
Route::post('/eventos', [SessionController::class, 'prueba'])->name('login.prueba');
