<?php

use App\Http\Controllers\DespesaController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('despesa')->group(function() {
    Route::resource('despesa', DespesaController::class);
    Route::get('/total-despesas', [DespesasController::class, 'sum'])->name('total-despesas');
});

Route::prefix('receita')->group(function () {
    Route::resource('receita', ReceitaController::class);
    Route::get('/total-receitas', [ReceitaController::class, 'sum'])->name('total-receitas');
});

Route::prefix('usuarios')->group(function () {
    Route::get('/total-usuarios', [UserController::class, 'getCountOfUsers'])->name('total-usuarios');
    Route::get('/user/{id}', [UserController::class, 'show']);
});
