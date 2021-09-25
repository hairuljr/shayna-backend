<?php

use App\Http\Controllers\API\{CheckoutController, PartnerController, ProductController, TransactionController};
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'all']);
Route::post('checkout', [CheckoutController::class, 'checkout']);
Route::get('transactions/{id}', [TransactionController::class, 'get']);
Route::get('partners', [PartnerController::class, 'all']);
