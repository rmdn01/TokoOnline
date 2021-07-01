<?php

use Illuminate\Support\Facades\Route,
	App\Http\Controllers\frontend\HomeController,
	App\Http\Controllers\frontend\TentangController,
	App\Http\Controllers\frontend\LayananController,
	App\Http\Controllers\frontend\ProdukController,
	App\Http\Controllers\frontend\KontakController;

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

Route::resource('home', HomeController::class);
Route::resource('tentang', TentangController::class);
Route::resource('produk', ProdukController::class);
Route::resource('kontak', KontakController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
