<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// api



Route::apiResource('products', ProductController::class);

// Thêm các route cho các API mở rộng
Route::get('products/top/new', [ProductController::class, 'topNewProducts']);
Route::get('products/top/selling', [ProductController::class, 'topSellingProducts']);
Route::get('products/top/discounted', [ProductController::class, 'topDiscountedProducts']);
