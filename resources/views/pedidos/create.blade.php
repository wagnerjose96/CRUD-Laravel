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
            <select class="form-control" id="pessoa_id" name="pessoa_id">
                <option value="0">Selecione o Cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Produto</label>
            <select class="form-control col-lg-4" id="pessoa_id" name="pessoa_id">
                <option value="0">Selecione o Produto</option>
                @foreach($produtos as $produto)
                    <option value="{{$produto->id}}">{{$produto->nome}}</option>
                @endforeach
            </select>
            <br/>
            <label>Quantidadde</label>
            <input class="form-control col-lg-2" id="numero" name="numero" type="number" value="1">
            <br/>
            <label>Preço Unitário</label>
            <input class="form-control col-lg-2" id="preco" name="preco" value="{{$cliente->valor}}">
            <br/>
            <label>Total do Item</label>
            <input class="form-control col-lg-2" id="total_item" name="total_item">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input class="form-control" id="total_pedido" name="total_pedido"disabled>
        </div>
        <button type="submit" class="btn btn-default">SAVE</button>
    </form>
@endsection

{{--//tenho que trazer os clientes--}}
{{--//tenho que trazer os produtos--}}
{{--//tenho que colocar campo de desconto em %--}}
{{--//e fazer gerar o total automaticamente na propria view--}}