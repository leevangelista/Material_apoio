<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AgendamentoController;

Route::get('/', [UsuarioController::class, 'login']);
Route::get('/login', [UsuarioController::class, 'login']);
Route::post('/login', [UsuarioController::class, 'autenticar']);
Route::post('/logout', [UsuarioController::class, 'logout']);
Route::get('/principal', function () {
    return view('principal');
});

// Clientes

Route::get('/clientes/listar', [ClienteController::class, 'listar']);
Route::get('/clientes/create', [ClienteController::class, 'create']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

// Veiculos

Route::get('/veiculos/listar', [VeiculoController::class, 'listar']);
Route::get('/veiculos/create', [VeiculoController::class, 'create']);
Route::post('/veiculos', [VeiculoController::class, 'store']);
Route::get('/veiculos/{id}/edit', [VeiculoController::class, 'edit']);
Route::put('/veiculos/{id}', [VeiculoController::class, 'update']);
Route::delete('/veiculos/{id}', [VeiculoController::class, 'destroy']);

// Agendamentos

Route::get('/agendamentos/listar', [AgendamentoController::class, 'listar']);
Route::get('/agendamentos/create', [AgendamentoController::class, 'create']);
Route::post('/agendamentos', [AgendamentoController::class, 'store']);
Route::get('/agendamentos/{id}/edit', [AgendamentoController::class, 'edit']);
Route::put('/agendamentos/{id}', [AgendamentoController::class, 'update']);
Route::delete('/agendamentos/{id}', [AgendamentoController::class, 'destroy']);