<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AssistenciaController;

Route::get('/', function () {
    return view('layout.app'); 
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});

Route::prefix('assistencias')->group(function () {
    Route::get('/', [AssistenciaController::class, 'index'])->name('assistencias.index');
    Route::get('/create', [AssistenciaController::class, 'create'])->name('assistencias.create');
    Route::post('/', [AssistenciaController::class, 'store'])->name('assistencias.store');
    Route::get('/{assistencia}', [AssistenciaController::class, 'show'])->name('assistencias.show');
    Route::get('/{assistencia}/edit', [AssistenciaController::class, 'edit'])->name('assistencias.edit');
    Route::put('/{assistencia}', [AssistenciaController::class, 'update'])->name('assistencias.update');
    Route::delete('/{assistencia}', [AssistenciaController::class, 'destroy'])->name('assistencias.destroy');
});