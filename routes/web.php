<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
    

Route::get('/', [ProductController::class, 'create']);
Route::get('/change', [ProductController::class, 'change'])->name('changeLang');
Route::post('/', [ProductController::class, 'store']);
Route::get('/list', [ProductController::class, 'list'])->name('list');
Route::get('/table', [ProductController::class, 'table'])->name('table');
Route::get('/pdf', [ProductController::class, 'index'])->name('pdf');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



