<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('cadastro', App\Http\Controllers\CadastroController::class) ;

Route::resource('inscritos', App\Http\Controllers\InscritoController::class);

Route::resource('vagas', App\Http\Controllers\VagaController::class);