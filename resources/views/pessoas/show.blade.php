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
    <form method="post" action="{{route('pessoas.update', ['pessoa' => $pessoa->id])}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" id="nome" name="nome" value="{{$pessoa->nome}}">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input class="form-control" id="cpf" name="cpf" value="{{$pessoa->cpf}}">
        </div>
        <div class="form-group">
            <label>Data Nascimento</label>
            <input class="form-control" id="data_nascimento" name="data_nascimento" type="date" value="{{$pessoa->data_nascimento}}">
        </div>
        <button type="submit" class="btn btn-default">SAVE</button>
    </form>
    </table>
@endsection