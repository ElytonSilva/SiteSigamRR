<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Renovacao;
use App\Http\Requests\RenovacaoRequest;
class RenovacaoController extends Controller
{
    public function index()
    {
        return view('dashboard.renovacao.index');
    }

    public function listaRenovacao(){
        $renovacao = Renovacao::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('renovacao.index'),'titulo'=>'Renovacao'],
            ['url'=>'','titulo'=>'Lista de Renovações Solicitadas'],
            
        ];
        return view('dashboard.matricula.lista',compact('renovacao','caminhos'));
    }


    public function store(RenovacaoRequest $request){

        
        $user = Auth()->user();
        
        $dados = $request->all();

        $renovacao = Renovacao::create($dados);


        return view('dashboard.renovacao.confirmacao', compact ('renovacao'));
    }

    public function edit($id)
    {
        $user = Auth()->user();
        $renovacao = Renovacao::find($id);

        return view('dashboard.renovacao.editar',compact('renovacao'));
    }

    public function destroy($id)
    {
        Renovacao::find($id)->delete();
        return redirect()->route('matricula.lista');
    }
}
