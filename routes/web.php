<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LangController;
    

Route::get('/', [ProductController::class, 'create']);
Route::get('/change', [ProductController::class, 'change'])->name('changeLang');
Route::post('/', [ProductController::class, 'store']);
Route::get('/list', [ProductController::class, 'list'])->name('list');
Route::get('/table', [ProductController::class, 'table'])->name('table');
Route::get('/pdf', [ProductController::class, 'index'])->name('pdf');

// lang
// Route::get('lang/home', [LangController::class, 'index']);
// Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
