<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('root');
Route::get('/add', [ProductController::class, 'add_product_view'])->name('add_product_view');
Route::post('/add', [ProductController::class, 'add_product'])->name('add_product');
Route::get('/edit/{id}', [ProductController::class, 'edit_product_view'])->name('edit_product_view');
Route::put('/edit/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
Route::get('/produk/{id}', [ProductController::class, 'show_product'])->name('show_product');
Route::delete('/delete/{id}', [ProductController::class, 'delete_product'])->name('delete_product');