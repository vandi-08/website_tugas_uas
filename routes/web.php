<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

Route::get('/', [ProductController::class, 'index'])->name('products');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');
Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');

Route::get('/about', function () {
    return view('about');
})->name('about');
