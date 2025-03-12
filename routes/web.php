<?php

use App\Http\Controllers\ListBarangController;

  Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
     return view('list_barang', compact('id', 'nama')); 
    });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);