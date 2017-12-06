@extends('layouts.layouts')
@section('conteudo')
    <h3>Itens Pedidos</h3>
    <br/>
    <br/>
    <table class="table table-stiped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Desconto(%)</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($itemPedidos as $itemPedido)
            <tr>
                <td>{{ $itemPedido->id }}</td>
                <td>{{ $itemPedido->produto_id }}</td>
                <td>{{ $itemPedido->quantidade }}</td>
                <td>{{ $itemPedido->preco }}</td>
                <td>{{ $itemPedido->desconto }}</td>
                <td>{{ $itemPedido->total }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-default" href="{{ '/' }}">Retornar</a>
@endsection