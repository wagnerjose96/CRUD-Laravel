@extends('layouts.layouts')
@section('conteudo')
    <h3>Lista de Pessoas</h3>
    <br/>
        <a class="btn btn-default" href="{{route('pessoas.create')}}">ADD++</a>
    <br/>
    <table class="table table-stiped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->id }}</td>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->cpf }}</td>
                <td>{{ $pessoa->data_nascimento }}</td>
                <td>
                    <a href="{{route('pessoas.edit', ['pessoa' => $pessoa->id])}}">Editar</a>
                    <a href="{{route('pessoas.show', ['pessoa' => $pessoa->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-default" href="{{route('pessoas.create')}}">Retornar</a>
@endsection