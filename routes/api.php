<?php

use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Blog
Route::get('/posts', [BlogController::class, 'index']);
Route::post('/posts', [BlogController::class, 'store']);

Route::get('/posts/{id}', [BlogController::class, 'show']);
Route::put('/posts/{id}', [BlogController::class, 'update']);
Route::delete('/posts/{id}', [BlogController::class, 'delete']);