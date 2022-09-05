<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Welcome;
use App\Http\Controllers\About;
use App\Http\Controllers\Product;
use App\Http\Controllers\Store;

Route::get('/', [Welcome::class,'index']);
Route::get('/pages/about', [About::class,'index'])->name('about');
Route::get('/pages/product', [Product::class,'index'])->name('product');
Route::get('/pages/store', [Store::class,'index'])->name('store');