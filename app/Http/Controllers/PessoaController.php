<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function formInserir()
    {
        return view('pessoa.inserir');
    }

    public function inserir(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->setNome($request->nome);
        $pessoa->setDataNascimento($request->dataNascimento);
        $pessoa->setCpf($request->cpf);
        $pessoa->save();
        return redirect()->to('/pessoa');
    }

    public function formAltarar()
    {
        return view('pessoa.alterar');
    }

    public function altarar(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->setNome($request->nome);
        $pessoa->setDataNascimento($request->dataNascimento);
        $pessoa->setCpf($request->cpf);
        $pessoa->save();
        return redirect()->to('/pessoa');
    }

    public function excluir(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        if(!$pessoa)
        {
            abort(404);
        }
        $pessoa->delete();
        return redirect()->to('/pessoa/');
    }

    public function buscar($pesquisa)
    {

    }

    public function listar()
    {
        $pessoas = Pessoa::all();
        return view('pessoa.listar', compact('pessoas'));
    }
}
