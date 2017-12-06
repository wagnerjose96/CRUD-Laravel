@extends('layouts.layouts')
@section('conteudo')
    <h3>Lista de Produtos</h3>
    <br/>
        <a class="btn btn-default" href="{{route('produtos.create')}}">ADD++</a>
    <br/>
    <table class="table table-stiped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->codigo }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>
                    <a href="{{route('produtos.edit', ['produto' => $produto->id])}}">Editar</a>
                    <a href="{{route('produtos.show', ['produto' => $produto->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-default" href="{{'/'}}">Retornar</a>
@endsection