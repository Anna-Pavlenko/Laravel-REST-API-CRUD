<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);

Route::middleware(['auth:sanctum'])->group(function(){
Route::post('logout',[AuthController::class,'logout']);
Route::get('products',[ProductController::class, 'index']);
Route::get('product/{id}/show',[ProductController::class, 'show']);
Route::post('product/{id}/update',[ProductController::class, 'update']);
Route::delete('product/{id}/delete',[ProductController::class, 'delete']);
Route::post('product/add',[ProductController::class, 'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
});
