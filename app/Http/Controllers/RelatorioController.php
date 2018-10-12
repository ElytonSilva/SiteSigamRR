<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreMatricula;
class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>'','titulo'=>'Relatórios'],    
        ];
        return view('dashboard.relatorios.index', compact('caminhos'));
    }

    public function lista(){
        $prematriculas = PreMatricula::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('relatorios.index'),'titulo'=>'Relatórios'],
            ['url'=>'','titulo'=>'Lista de Cadastrados Pré-Matricula'],
            
        ];
        return view('dashboard.relatorios.listaprematricula',compact('prematriculas','caminhos'));
    }

    public function BuscarAluno(Request $request){
       
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('relatorios.index'),'titulo'=>'Relatórios'],
            ['url'=>route('relatorios.lista'),'titulo'=>'Lista de Cadastrados Pré-Matricula'],
            ['url'=>'','titulo'=>'Pesquisar Nome do Aluno Sorteado'],
            
        ];
        
        
        $str = $request->get('buscar');
        $prematriculas = PreMatricula::where( 'nomealuno' , 'ILIKE' , '%'. $str .'%' )
            ->orderBy('nomealuno','asc')
            ->paginate(4);
        return view('dashboard.relatorios.listaprematricula', compact('caminhos'))->with([ 'prematriculas' => $prematriculas ,'buscar' => true ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
        //
    }
}
