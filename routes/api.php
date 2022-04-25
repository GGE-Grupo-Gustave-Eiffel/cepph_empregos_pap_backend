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


//Route::get('/vagas', 'App\Http\Controllers\VagaController@index');
Route::get('vagas', [App\Http\Controllers\VagaController::class,'index']);

Route::post('cadastro', [App\Http\Controllers\CadastroController::class,'store']);

Route::resource('cadastro', App\Http\Controllers\CadastroController::class) ;

Route::resource('inscritos', App\Http\Controllers\InscritoController::class);