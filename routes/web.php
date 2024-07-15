<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

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
Route::get('/products/{productName}/specs', [ProductController::class, 'specs'])->name('specs');
Route::get('/transaction', [TransactionController::class, 'showTransactionForm'])->name('transaction');
Route::get('/transaction', [TransactionController::class, 'create']);
Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction');
Route::get('/onlineshop', function () {
    return view('onlineshop');
})->name('onlineshop');
// Bagian Article
Route::get('/article', function () {
    return view('article');
});
