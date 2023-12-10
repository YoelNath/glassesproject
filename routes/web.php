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

Route::get('/index', function () {
    return view('index');
});

Route::get('/categories', function () {
    return view('categories');
});
    

Route::get('/menglasses', function () {
    return view('menglasses');
});


Route::get('/categories', function () {
    return view('categories');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

