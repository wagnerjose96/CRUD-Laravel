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
});

Route::group([],function (){
    Route::resource('produtos', 'ProdutosController');
});

Route::group([],function (){
    Route::resource('item_pedidos', 'ItemPedidosController');
});

Route::group([],function (){
    Route::resource('pedidos', 'PedidosController');
});