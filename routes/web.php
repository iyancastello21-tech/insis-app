<?php

use Illuminate\Support\Facades\Route; // import route
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MathController; // tambahkan controller baru

// route resource for products
Route::resource('/products', ProductController::class);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/add', [MathController::class, 'add']);
