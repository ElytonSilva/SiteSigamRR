<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Renovacao;
use App\Matricula;
use Illuminate\Support\Facades\Auth;
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
	
    public function listardados(){
        $matricula = Matricula::where('user_id', Auth::id())->get();

        //dd($matricula);
        return view('dashboard.renovacao.teste', compact( 'matricula'));
    }

    public function store(RenovacaoRequest $request){

		
		$user = Auth()->user();

        $dados = $request->get('rematricula');

		foreach ($dados as $key => $dado) {
			
			Renovacao::create($dado);
		}
		

		
		
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
