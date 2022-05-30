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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', 'App\Http\Controllers\ProductController');

Route::get('/o_nama', [App\Http\Controllers\ProductController::class, 'o_nama'])->name('o_nama');
Route::get('/', [App\Http\Controllers\ProductController::class, 'pocetna'])->name('pocetna');
Route::get('/artikli', [App\Http\Controllers\ProductController::class, 'artikli'])->name('artikli');
Route::get('/kontakt', [App\Http\Controllers\ProductController::class, 'kontakt'])->name('kontakt');
