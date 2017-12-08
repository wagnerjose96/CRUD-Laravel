@extends('layouts.layouts')
@section('conteudo')
    <h3>Detalhes do Pedido</h3>
    <a class="btn btn-primary" href="{{ route('pedidos.edit',['pedido' => $pedido->id]) }}">ADD Novo Item</a>
    <a class="btn btn-danger" href="{{ route('pedidos.destroy',['pedido' => $pedido->id]) }}"

       onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir Pedido</a>

    <form id="form-delete"style="display: none" action="{{ route('pedidos.destroy',['pedido' => $pedido->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>

    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">Cliente</th>
            <td>{{$cliente->nome}}</td>
        </tr>
        <tr>
            <th scope="row">Númedo</th>
            <td>{{$pedido->numero}}</td>
        </tr>
        {{--<tr>--}}
            {{--<th scope="row">Itens</th>--}}
            {{--@foreach($itens_pedido as $item_pedido)--}}
            {{--<td>{{$item_pedido->id}}</td>--}}
        {{--</tr>--}}
        <tr>
            <th scope="row">Emissão</th>
            <td>{{$pedido->emissao}}</td>
        </tr>
        <tr>
            <th scope="row">Total</th>
            <td>{{$pedido->total}}</td>
        </tr>

        </tbody>
    </table>
@endsection