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
    <form method="post" action="/pessoas">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label>Data Nascimento</label>
            <input class="form-control" id="data_nascimento" name="data_nascimento" type="date">
        </div>
        <button type="submit" class="btn btn-default">SAVE</button>
    </form>
@endsection