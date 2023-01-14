<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'create']);
Route::post('/', [ProductController::class, 'store']);
Route::get('/list', [ProductController::class, 'list'])->name('list');
