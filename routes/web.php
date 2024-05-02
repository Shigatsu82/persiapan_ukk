<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', KategoriController::class);
Route::resource('products', ProductController::class);