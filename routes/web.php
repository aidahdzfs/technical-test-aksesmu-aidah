<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});

// Menangani semua rute CRUD (index, create, store, edit, update, destroy) otomatis
Route::resource('products', ProductController::class);

// Route::get('/', [ProductController::class, 'index'])->name('products.index');