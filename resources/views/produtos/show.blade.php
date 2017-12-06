@extends('layouts.layouts')
@section('conteudo')
    <h3>Ver Produto</h3>
    <a class="btn btn-primary" href="{{ route('produtos.edit',['produto' => $produto->id]) }}">Editar</a>
    <a class="btn btn-danger" href="{{ route('produtos.destroy',['produto' => $produto->id]) }}"
       onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>

    <form id="form-delete"style="display: none" action="{{ route('produtos.destroy',['produto' => $produto->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>

    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$produto->id}}</td>
        </tr>
        <tr>
            <th scope="row">Codigo</th>
            <td>{{$produto->codigo}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$produto->nome}}</td>
        </tr>
        <tr>
            <th scope="row">Preço</th>
            <td>{{$produto->preco}}</td>
        </tr>
        </tbody>
    </table>
@endsection