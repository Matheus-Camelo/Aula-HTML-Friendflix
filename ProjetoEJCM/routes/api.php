<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ROTAS PARA USER
Route::get('listaUser', 'UserController@listUser'); //rota para listar um user
Route::get('mostraUser/{id}', 'UserController@showUser');//rota para mostrar um user específico
Route::post('criaUser', 'UserController@createUser');//rota para criar um user
Route::put('atualizaUser/{id}', 'UserController@updateUser');//rota para atualizar um user específico
Route::delete('deletaUser/{id}', 'UserController@deleteUser');//rota para deletar um user específico

//ROTAS PARA SERIES
Route::get('listaSerie', 'SerieController@listSerie');//rota para listar uma serie
Route::get('mostraSerie/{id}', 'SerieController@showSerie');//rota para mostrar uma serie específica
Route::post('criaSerie', 'SerieController@createSerie');//rota para criar uma serie
Route::put('atualizaSerie/{id}', 'SerieController@updateSerie');//rota para atualizar uma serie específica
Route::delete('deletaSerie/{id}', 'SerieController@deleteSerie');//rota para deletar uma serie específica
