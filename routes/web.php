<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;


Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('admin')->middleware('auth')->group(function () {
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('products/{product}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
  Route::resource('products', ProductController::class);
  Route::resource('product-galleries', ProductGalleryController::class);
  Route::get('transactions/{transaction}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
  Route::resource('transactions', TransactionController::class);
});
