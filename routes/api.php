<?php

use App\Http\Controllers\AuthController;
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



Route::prefix('despesa')->group(function() {
    Route::resource('despesa', DespesaController::class);
    Route::get('/total-despesas', [DespesasController::class, 'sum'])->name('total-despesas');
});

Route::prefix('receita')->group(function () {
    Route::resource('receita', ReceitaController::class);
    Route::post('/nova-receita', [ReceitaController::class, 'store']);
    Route::get('/total-receitas', [ReceitaController::class, 'sum'])->name('total-receitas');
    Route::put('/editar-receita/{id}', [ReceitaController::class, 'update']);
    Route::get('/receita/{id}', [ReceitaController::class, 'show']);
    Route::get('/pesquisar', [ReceitaController::class, 'pesquisar' ]); 
});

Route::prefix('usuarios')->group(function () {
    Route::get('/total-usuarios', [UserController::class, 'getCountOfUsers'])->name('total-usuarios');
    Route::get('/user/{id}', [UserController::class, 'show']);
});

Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('logout', [AuthController::class,'logout'])->name('logout');
Route::post('refresh', [AuthController::class,'refresh'])->name('refresh');
Route::post('me', [AuthController::class,'me'])->name('me');
