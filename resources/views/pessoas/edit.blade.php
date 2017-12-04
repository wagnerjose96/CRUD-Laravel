@extends('layouts.layouts')
@section('conteudo')
    <h3>Nova Pessoa</h3>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="put" action="{{route('pessoas.update', ['pessoa' => $pessoa->id])}}">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>ID</label>
            <input class="form-control" id="id" name="id" value="{{$pessoa->id}}">
        </div>
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
@endsection