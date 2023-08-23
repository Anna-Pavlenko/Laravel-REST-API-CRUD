<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products',[ProductController::class, 'index']);
Route::get('product/{id}/show',[ProductController::class, 'show']);
Route::post('product/{id}/update',[ProductController::class, 'update']);
Route::delete('product/{id}/delete',[ProductController::class, 'delete']);
Route::post('product/add',[ProductController::class, 'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
