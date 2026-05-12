<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [AutoController::class, 'register']);

Route::post('/login', [AutoController::class, 'login']);

Route::get('/dashboard', [AutoController::class, 'dashboard']);

Route::post('/emocion', [AutoController::class, 'guardarEmocion']);

Route::get('/eliminar/{id}', [AutoController::class, 'eliminar']);

Route::get('/logout', [AutoController::class, 'logout']);

Route::get('/editar/{id}', [AutoController::class, 'editar']);

Route::post('/actualizar/{id}', [AutoController::class, 'actualizar']);

Route::get('/login', function () {
    return view('login');
});