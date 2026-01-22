<?php

use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;

// jeito mais detalhado e que ocupa mais linhas
// Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'store']);

// cadastra as 5 rotas de maneira automatica
Route::apiResource('users', UserController::class);
