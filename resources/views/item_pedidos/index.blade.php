@extends('layouts.layouts')
@section('conteudo')
    <h3>Itens Pedidos</h3>
    <br/>
        <a class="btn btn-default" href="{{route('item_pedidos.create')}}">ADD++</a>
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
            <th>Ações</th>
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

                <td>
                    <a href="{{route('item_pedidos.edit', ['itemPedido' => $itemPedido->id])}}">Editar</a>
                    <a href="{{route('item_pedidos.show', ['itemPedido' => $itemPedido->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-default" href="{{ '/' }}">Retornar</a>
@endsection