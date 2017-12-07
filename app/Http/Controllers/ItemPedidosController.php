<?php

namespace App\Http\Controllers;

use App\ItemPedido;
use Illuminate\Http\Request;

class ItemPedidosController extends Controller
{
    public function index() //não é necessario
    {
        //
    }

    public function create() //não é necessario redireiconar para uma pagina de criação de item pedidos, pois não haverá uma
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        ItemPedido::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itensPedidos = ItemPedido::where('produto_id', $id);
        return $itensPedidos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itensPedido = ItemPedido::where('pedido_id',$id);
        $itensPedido->delete();
    }

    private function _validate($request)
    {
        $itemPedido = $request->route('item_pedido');
        $itemPedidoId = $itemPedido instanceof ItemPedido ? $itemPedido->id : null;
        $this->validate($request,[
            'pedido_id' => "required,$itemPedidoId", //para deixar editar
            'produto_id' => "required,$itemPedidoId",
            'quantidade' => "required|numeric,$itemPedidoId",
            'preco' => "required,$itemPedidoId",
            'preco' => "required,$itemPedidoId",
            'desconto' => "required,$itemPedidoId",
            'total' => "required,$itemPedidoId",
        ]);
        return $request->all();
    }

}
