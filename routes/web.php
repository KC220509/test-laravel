<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProductController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('homeLayout.home');
// })->name('home');

Route::group(['prefix'=> ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

});

Route::group(['prefix'=> 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/{id}', [ProductController::class,'show'])->name('product.show');
    Route::post('/', [ProductController::class,'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::put('/{product}', [ProductController::class,'updateProduct'])->name('product.update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});
    