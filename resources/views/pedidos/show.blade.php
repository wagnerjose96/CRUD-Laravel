@extends('layouts.layouts')
@section('conteudo')
    <h3>Ver Pessoa</h3>
    <a class="btn btn-primary" href="{{ route('pessoas.edit',['pessoa' => $pessoa->id]) }}">Editar</a>
    <a class="btn btn-danger" href="{{ route('pessoas.destroy',['pessoa' => $pessoa->id]) }}"

       onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>

    <form id="form-delete"style="display: none" action="{{ route('pessoas.destroy',['pessoa' => $pessoa->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>

    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$pessoa->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$pessoa->nome}}</td>
        </tr>
        <tr>
            <th scope="row">CPF</th>
            <td>{{$pessoa->cpf}}</td>
        </tr>
        <tr>
            <th scope="row">Data Nascimento</th>
            <td>{{$pessoa->data_nascimento}}</td>
        </tr>
        </tbody>
    </table>
@endsection