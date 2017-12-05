<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = \App\Pessoa::all();
        return view('pessoas.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        Pessoa::create($data);
        return redirect()->route('pessoas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        $pessoa->fill($data);
        $pessoa->save();
        return redirect()->route('pessoas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect()->route('pessoas.index');
    }

    private function _validate(Request $request)
    {
        $pessoa = $request->route('pessoa');
        $pessoaId = $pessoa instanceof Pessoa ? $pessoa->id : null;
        $this->validate($request,[
//            'id' => "required|max:255|unique:pessoas,id,$pessoaId", //esse vai ser necessario se o UUID for se usado
            'nome' => "required|max:255|unique:pessoas,nome,$pessoaId", //para deixar editar
            'cpf' => "required|max:11|unique:pessoas,cpf,$pessoaId|valida_cpf",
            'data_nascimento' => 'required|date'
        ]);
        return $request->all();
    }
}
