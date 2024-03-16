<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NomeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/listar', [NomeController::class, 'listar']);

Route::get('/buscar/{id}', [NomeController::class, 'buscar']);

Route::post('/cadastrar', [NomeController::class, 'cadastrar']);

Route::post('/atualizar/{id}', [NomeController::class, 'atualizar']);

Route::delete('/deletar/{id}', [NomeController::class, 'deletar']);
