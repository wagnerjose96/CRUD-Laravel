@extends('layouts.layouts')
<div class="container">
    <div class="row">
        <h1>Projeto Laravel 5.5</h1>
        <br/>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-default" href="{{route('pessoas.index')}}">PESSOAS</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-default" href="{{route('produtos.index')}}">PRODUTOS</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-default">PEDIDOS</a>
            <a class="btn btn-default" href="{{route('item_pedidos.index')}}">ITENS DE PEDIDOS</a>
        </div>
    </div>
</div>