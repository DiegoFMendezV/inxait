<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\GanadorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clientes', [ClientesController::class, 'index'])
    ->name('clientes');

    
Route::post('/', [ClientesController::class, 'store'])
    ->name('clientes_create');
    
Route::get('/', [DepartamentoController::class, 'index'])
    ->name('departamentos');
    
Route::get('/ganador', [GanadorController::class, 'index'])
    ->name('ganador');
