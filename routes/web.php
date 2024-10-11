<?php

use App\Http\Controllers\Web\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class,'index']);