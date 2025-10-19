<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;

// เช็คระบบ
Route::get('ping', fn() => response()->json(['ok' => true]));

// Auth
Route::post('register', [AuthController::class, 'register']);
Route::post('login',    [AuthController::class, 'login']);

// Public read
Route::get('products',        [ProductController::class, 'index']);
Route::get('products/{id}',   [ProductController::class, 'show']);

// Protected write
Route::middleware('auth:sanctum')->group(function () {
    Route::post('products',        [ProductController::class, 'store']);   // << ต้องมีอันนี้
    Route::put('products/{id}',    [ProductController::class, 'update']);
    Route::delete('products/{id}', [ProductController::class, 'destroy']);
    Route::post('logout',          [AuthController::class, 'logout']);
});
