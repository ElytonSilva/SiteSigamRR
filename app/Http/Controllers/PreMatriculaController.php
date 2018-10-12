<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreMatricula;
use App\User;
use App\Http\Requests\PreMatriculaRequest;
class PreMatriculaController extends Controller
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
            ['url'=>'','titulo'=>'Pré-Inscricao'],
            
        ];
        $identificador = Auth()->User()->id;
        $saida = strval($identificador);
        switch(strlen($saida)){
            case 1:{
                $saida = "000".$saida;
            }break;
            case 2:{
                $saida = "00".$saida;
            }break;
            case 3:{
                $saida = "0".$saida;
            }break;
        }
        return view('dashboard.prematricula.index', compact('saida', 'caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreMatriculaRequest $request)
    {   
        $user = Auth()->user();
        
        $dados = $request->all();
        
        //dd($dados);
        $prematricula = PreMatricula::create($dados);

       // dd($prematricula);
        return view('dashboard.prematricula.confirmacao', compact ('prematricula'));

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
