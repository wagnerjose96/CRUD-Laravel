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

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection