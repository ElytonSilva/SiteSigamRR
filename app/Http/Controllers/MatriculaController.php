<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Http\Requests\MatriculaRequest;
class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        return view('dashboard.matricula.telaprincipal');
        
    }
    public function lista(){
        $matriculas = Matricula::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('matricula.index'),'titulo'=>'Matricula'],
            ['url'=>'','titulo'=>'Lista de Alunos'],
            
        ];
        return view('dashboard.matricula.lista',compact('matriculas','caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.matricula.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatriculaRequest $request)
    {   
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('matricula.index'),'titulo'=>'Matricula'],
            ['url'=>'','titulo'=>'Inscricao Realizada'],
            
        ];
        $user = Auth()->user();
        
        
        $dados = $request->all();
        
        
        $matricula = Matricula::create($dados);

        //return'Cadastrado com Sucesso......';
        return view('dashboard.matricula.confirmacao');
        //return redirect('/admin/matricula')->with('info','Cadastro feito!');

        
    }
    public function vermais($id){
        $matricula = Matricula::find($id);
        return view('dashboard.matricula.vermais',compact('matricula'));
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
        $user = Auth()->user();
        $matricula = Matricula::find($id);

        return view('dashboard.matricula.editar',compact('matricula'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatriculaRequest $request, $id)
    {
        Matricula::find($id)->update($request->all());
        return redirect()->route('matricula.lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matricula::find($id)->delete();
        return redirect()->route('matricula.lista');
    }

    public function busca(Request $request){
        /*
        $alunos = Matricula::where('nomealuno', 'LIKE', '%' . $request->Buscar . '%')->get();

        return view('matricula.lista',[
            'alunos'=>$alunos,
            'Buscar' =>$request->Buscar]);

         */

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Tela Inicial'],
            ['url'=>route('matricula.index'),'titulo'=>'Matricula'],
            ['url'=>route('matricula.lista'),'titulo'=>'Lista de Alunos'],
            ['url'=>'','titulo'=>'Pesquisar nome dos Alunos'],
            
        ];
        
        
        $str = $request->get('buscar');
        //$option = $request->input('nomealuno');
        $matriculados = Matricula::where( 'nomealuno' , 'ILIKE' , '%'. $str .'%' )
            ->orderBy('nomealuno','asc')
            ->paginate(4);
        //dd($matriculados);
        return view('dashboard.matricula.lista', compact('caminhos'))->with([ 'matriculas' => $matriculados ,'buscar' => true ]);   
    }
}
