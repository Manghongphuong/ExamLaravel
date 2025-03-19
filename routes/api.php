<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductsController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']] , function () {
    Route::get('/profile', function(Request $request) { 
        return auth()->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::apiResource('products', ApiProductsController::class);