<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivroController;

//endpoint get
Route::get('/livros', [LivroController::class, 'index']);
Route::get('/livros/{id}', [LivroController::class, 'show']);

//endpoint post
Route::post('/livros', [LivroController::class, 'store']);

//endpoint put
Route::put('/livros/{id}', [LivroController::class, 'update']);

//endpoint delete
Route::delete('/livros/{id}', [LivroController::class, 'destroy']);
