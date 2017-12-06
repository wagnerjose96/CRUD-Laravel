@extends('layouts.layouts')
@section('conteudo')
    <h3>Novo Pedido</h3>
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
            <label>Cliente</label>
            <input class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label>Produto</label>
            <input class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label>Produto</label>
            <input class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label>Produto</label>
            <input class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label>Produto</label>
            <input class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input class="form-control" id="total" name="total"disabled>
        </div>
        <button type="submit" class="btn btn-default">SAVE</button>
    </form>
@endsection

//tenho que trazer os clientes
//tenho que trazer os produtos
//tenho que colocar campo de desconto em %
//e fazer gerar o total automaticamente na propria view