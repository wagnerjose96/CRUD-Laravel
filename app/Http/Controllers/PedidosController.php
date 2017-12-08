<?php

namespace App\Http\Controllers;

use App\ItemPedido;
use App\Pedido;
use App\Pessoa;
use App\Produto;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = \App\Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoa::all();
        $produtos = Produto::all();
        return view('pedidos.create', compact('pessoas', 'produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numero = Pedido::select()->count();
        $numero++;

        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        $arrayNumero = array('numero' => $numero);
        $resultado = array_merge($data, $arrayNumero);

        $pedido = Pedido::create($resultado);


        $itemPedido['pedido_id'] = $pedido->id;
        $itemPedido['produto_id'] = $resultado['produto_id'];
        $itemPedido['quantidade'] = $resultado['quantidade'];
        $itemPedido['preco'] = $resultado['preco'];

        $id_produto = $resultado['produto_id'];
        $produto = Produto::findOrFail($id_produto);

        $itemPedido['desconto'] = (($produto->preco / $resultado['preco']) - 1) * 100;
        $itemPedido['total'] = $resultado['total'];

        ItemPedido::create($itemPedido);

        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        $itens_pedido = ItemPedido::where('pedido_id', '=', $pedido->id);
        $cliente = Pessoa::findOrFail($pedido->pessoa_id);
//        $produtos = Produto::where('id', $itens_pedido->produto_id);
        return view('pedidos.show', compact('pedido','itens_pedido', 'cliente'));
    }


    public function edit(Pedido $pedido)
    {
        $produtos = Produto::all();
        return view('pedidos.edit', compact('pedido', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');

        $itemPedido['pedido_id'] = $pedido->id;
        $itemPedido['produto_id'] = $data['produto_id'];
        $itemPedido['quantidade'] = $data['quantidade'];
        $itemPedido['preco'] = $data['preco'];

        $id_produto = $data['produto_id'];
        $produto = Produto::findOrFail($id_produto);

        $itemPedido['desconto'] = (($produto->preco / $data['preco']) - 1) * 100;
        $itemPedido['total'] = $data['total'];
        ItemPedido::create($itemPedido);

        $pedidoAntigo = Pedido::findOrFail($pedido->id);
        $valorAntigo = $pedidoAntigo->total;
        $valorNovo = $valorAntigo + $data['total'];
        $data['total'] = $valorNovo;

        $pedido->fill($data);
        $pedido->save();

        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        ItemPedido::destroy($id);
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }

    public function _validate(Request $request)
    {
        $pedido = $request->route('pedido');
        $pedidoId = $pedido instanceof Pedido ? $pedido->id : null;
//
//            $this->validate($request, [
//                'pessoa_id' => "required,$pedidoId", //para deixar editar
//                'numero' => "required,$pedidoId",
//                'emissao' => "required|date,$pedidoId",
//                'total' => "required,$pedidoId"
//        ]);
        return $request->all();
    }
}
