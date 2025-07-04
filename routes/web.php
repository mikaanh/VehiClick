<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
   return view('welcome');
});

Route::get('/rentalkendaraan', function () {
   return view('image');
});

Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.list');
Route::post('listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/produk/{id}', [ListProdukController::class, 'delete'])->name('produk.destroy');
Route::get('produk/edit/{id}', [ListProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/update/{id}', [ListProdukController::class, 'update'])->name('produk.update');

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listitem', [ItemListController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);


Route::get('/home', function () {
   return view('pages.home');
});