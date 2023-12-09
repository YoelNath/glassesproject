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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lmao', function () {
    return view('auth/login');
});

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/categories', function () {
    return view('categories');
});
>>>>>>> 97b4b43e8853d52fee99a10a66e971b678f9b593

Route::get('/menglasses', function () {
    return view('menglasses');
});

<<<<<<< HEAD
Route::get('/categories', function () {
    return view('categories');
});
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 97b4b43e8853d52fee99a10a66e971b678f9b593
