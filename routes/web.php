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

Route::get('/listproduk', [ListProdukController::class, 'show'] );
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listitem', [ItemListController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);


Route::get('/home', function () {
   return view('pages.home');
});