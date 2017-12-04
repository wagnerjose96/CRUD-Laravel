<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faker $faker)
    {
//        $id = $faker->uuid;
//        $arrayId = array('id' => $id);

//        $this->validate($arrayId, [
//            'id' => 'required'//não faz sentido ser requerido mas sim conferir se nao ha repetido dentro do banco
//        ]);

        $this->_validate($request);
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter');
        Pessoa::create($data);
        return redirect()->to('/pessoas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $this->_validate($request);
        $data = $request->all();
        $pessoa->fill($data);
        $pessoa->save();
        return redirect()->to('/pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function _validate(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:255|',
            'cpf' => 'required|max:11',
            'data_nascimento' => 'required|date',
        ]);
    }
}
