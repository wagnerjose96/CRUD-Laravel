<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/pessoa'],  function(){
    Route::get('/', 'PessoaController@listar');
    Route::get('/form-cadastrar', 'PessoaController@formInserir');
    Route::post('/cadastrar', 'PessoaController@inserir');
    Route::get('/{id}/form-aletar', 'PessoaController@formAlterar');
    Route::post('/{id}/alterar', 'PessoaController@alterar');
    Route::get('/{id}/excluir', 'PessoaController@excluir');
});