<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
// Bagian Home
Route::get('/home', [HomeController::class, 'index']);

// Bagian Contact
Route::get('/contact', function () {
    return view('contact');
});
// Bagian Product
Route::get('/products', [ProductController::class, 'product']);
Route::get('/products/{productName}', [ProductController::class, 'Show'])->name('show');
// Bagian Article
Route::get('/article', function () {
    return view('article');
});
