<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anotacao;
use App\Http\Requests\AnotacaoRequest;
class AnotacaoController extends Controller
{
    public function index(){

        return view('dashboard.anotacao.index');
    }

    public function create(){

        return view('dashboard.anotacao.adicionar');
    }
    
    public function store(AnotacaoRequest $request)
    {   
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('anotacao.index'),'titulo'=>'Anotações'],
            ['url'=>'','titulo'=>'Anotação Cadastrada com Sucesso'],
            
        ];

        $user = Auth()->user();
        $dados = $request->all();

        $anotacoes = Anotacao::create($dados);
        return view('dashboard.anotacao.index');
          
    }

    public function listaAnotacao(){
        $anotacoes = Anotacao::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('anotacao.index'),'titulo'=>'Anotação'],
            ['url'=>'','titulo'=>'Lista de Anotações'],
            
        ];
        return view('dashboard.anotacao.lista',compact('anotacoes','caminhos'));
    }

    public function edit($id)
    {
        $user = Auth()->user();
        $anotacao = Anotacao::find($id);

        return view('dashboard.anotacao.editar',compact('anotacao'));
    }

    public function update(AnotacaoRequest $request, $id)
    {
        Anotacao::find($id)->update($request->all());
        return redirect()->route('anotacao.listar');
    }

    public function destroy($id)
    {
        Anotacao::find($id)->delete();
        return redirect()->route('anotacao.listar');
    }
}
