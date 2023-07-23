<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
    

Route::get('/', [ProductController::class, 'create']);
Route::post('/', [ProductController::class, 'store']);
Route::get('/list', [ProductController::class, 'list'])->name('list');
Route::get('/table', [ProductController::class, 'table'])->name('table');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/product/edit/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

