<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Blog
Route::get('/api/posts', [BlogController::class, 'index']);
Route::post('/api/posts', [BlogController::class, 'store']);

Route::get('/api/posts/{id}', [BlogController::class, 'show']);
Route::put('/api/posts/{id}', [BlogController::class, 'update']);
Route::delete('/api/posts/{id}', [BlogController::class, 'delete']);