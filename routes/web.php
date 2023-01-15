<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LangController;


Route::get('/', [ProductController::class, 'create']);
Route::post('/', [ProductController::class, 'store']);
Route::get('/list', [ProductController::class, 'list'])->name('list');
Route::get('/table', [ProductController::class, 'table'])->name('table');

// lang
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
