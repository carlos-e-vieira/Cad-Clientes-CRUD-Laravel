<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'principal']);
Route::get('/clientes/cadastrar', [ClienteController::class, 'cadastrar']);
Route::post('/clientes', [ClienteController::class, 'inserir']);
Route::get('/clientes/{id}', [ClienteController::class, 'mostrar']);
Route::delete('/clientes/{id}', [ClienteController::class, 'excluir']);
Route::get('/clientes/editar/{id}', [ClienteController::class, 'editar']);
Route::put('/clientes/atualizar/{id}', [ClienteController::class, 'atualizar']);
