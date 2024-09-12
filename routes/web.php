<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\ContaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rota Contas
Route::get('contas', [ContaController::class, 'index'])->name('contas.index');
Route::get('contas/create', [ContaController::class, 'create'])->name('contas.create');
Route::post('contas', [ContaController::class, 'store'])->name('contas.store');
Route::get('contas/{id}', [ContaController::class, 'show'])->name('contas.show');
Route::get('contas/{id}/edit', [ContaController::class, 'edit'])->name('contas.edit');
Route::put('contas/{id}', [ContaController::class, 'update'])->name('contas.update');
Route::delete('contas/{id}', [ContaController::class, 'destroy'])->name('contas.destroy');

// Rotas Cartões


Route::get('cartoes', [CartaoController::class, 'index'])->name('cartoes.index');
Route::get('cartoes/create', [CartaoController::class, 'create'])->name('cartoes.create');
Route::post('cartoes', [CartaoController::class, 'store'])->name('cartoes.store');
Route::get('cartoes/{id}', [CartaoController::class, 'show'])->name('cartoes.show');
Route::get('cartoes/{id}/edit', [CartaoController::class, 'edit'])->name('cartoes.edit');
Route::put('cartoes/{id}', [CartaoController::class, 'update'])->name('cartoes.update');
Route::delete('cartoes/{id}', [CartaoController::class, 'destroy'])->name('cartoes.destroy');



Route::get('/', function () {
    return view('welcome');
});
