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
    return view('index');
});

Route::group([],function (){
   Route::resource('pessoas', 'PessoasController');
//   Route::get('/pessoas/pesquisa/{pessoa}', 'PessoasController@pesquisa'); //essa rota é para a barra de pesquisa
});