@extends('layouts.layouts')
@section('conteudo')
    <h3>Lista de Pedidos</h3>
    <br/>
        <a class="btn btn-default" href="{{route('pedidos.create')}}">ADD++</a>
    <br/>
    <table class="table table-stiped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Número</th>
            <th>Emissão</th>
            <th>Total</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->pessoa_id }}</td>
                <td>{{ $pedido->numero }}</td>
                <td>{{ $pedido->emissao }}</td>
                <td>{{ $pedido->total }}</td>
                <td>
{{--                    <a href="{{route('$pedidos.show', ['pedido' => $pedido->id])}}">Ver Detalhes</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-default" href="{{ '/' }}">Retornar</a>
@endsection