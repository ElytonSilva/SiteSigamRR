<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*-------------------------------------- SLIDE CARROSSEL ------------------------------------------------------------------*/

Route::get('/', function () {
    $slides = [
        (object)[
            'titulo'=> 'ENSINO',
            'descricao'=>'A tecnologia otimizando tarefas',
            'url'=> '#link',
            'imagem'=> 'imagens/slide/slide_01.jpg'
        ],

        (object)[
            'titulo'=> 'COMUNIDADE',
            'descricao'=>'Disponivel através de várias plataformas',
            'url'=> '#link',
            'imagem'=> 'imagens/slide/slide_02.jpg'
        ],

        (object)[
            'titulo'=> 'TECNOLOGIA',
            'descricao'=>'Para transformar e mudar a vida das pessoas',
            'url'=> '#link',
            'imagem'=> 'imagens/slide/slide_03.jpg'
        ]
    ];
    return view('dashboard.index', compact('slides'));
});

/*-------------------------------------------------------------------------------------------------------------------------*/

Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {


  /*--------------------- ROTAS DE USUARIO --------------------------------------------------------------------------------*/
  
  Route::get('/', 'Admin\AdminController@index');
  Route::resource('usuarios', 'Admin\UsuarioController');

  Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
  Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
  Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);


 /*-------------------------------------------------------------------------------------------------------------------------*/


  /*--------------------- ROTAS DE PAPEIS --------------------------------------------------------------------------------*/

  Route::resource('papeis', 'Admin\PapelController');  
  
  Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
  Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
  Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);


  /*-------------------------------------------------------------------------------------------------------------------------*/


  /*--------------------- ROTAS DE MATRICULA --------------------------------------------------------------------------------*/

  Route::resource('matricula', 'MatriculaController');

  Route::get('matricula/listar/alunoscadastrados',['as'=>'matricula.lista','uses'=> 'MatriculaController@lista']);
  Route::get('matricula/Dados/{id}',['as'=>'matricula.vermais','uses'=>'MatriculaController@vermais']); 
  Route::post('matricula/listar/alunoscadastrados/busca',['as'=>'matricula.buscar','uses'=> 'MatriculaController@busca']);


  /*-----------------------ROTAS DE TESTES---------------------------------------------------------------*/

  //Route::get('matricula/create',['as'=>'matricula.create','uses'=>'MatriculaController@create']);
  //Route::post('matricula/cadastrar',['as'=>'matricula.store','uses'=>'MatriculaController@store']);

  /*------------------------------------------------------------------------------------------------------*/

  
  /*--------------------- ROTAS DE PRÉ MATRICULA ------------------------------------------------------------*/

    Route::get('/prematricula/inicio',['as'=>'prematricula.index','uses'=>'PreMatriculaController@index']);
    Route::post('/prematricula/salvar',['as'=>'prematricula.store','uses'=>'PreMatriculaController@store']);
    Route::get('/prematricula/{id}/comprovantepdf',['as'=>'prematricula.gerarpdf','uses'=>'PDFController@gerarpdf']);

  /*-----------------------------------------------------------------------------------------------------------*/

  /*------------------------ROTAS DE ANOTAÇÕES----------------------------------------------------------------*/
    Route::get('renovacao/inicio',['as'=>'renovacao.teste','uses'=>'RenovacaoController@listardados']);
    Route::post('renovacao/salvar',['as'=>'renovacao.store','uses'=>'RenovacaoController@store']);
    


  /*-----------------------------------------------------------------------------------------------------------*/
	
  /*-----------------------ROTAS DE RELATORIOS---------------------------------------------------------------*/

  Route::get('relatorios/inicio',['as'=>'relatorios.index','uses'=>'RelatorioController@index']);
  Route::get('relatorios/lista/Prematricula',['as'=>'relatorios.lista','uses'=> 'RelatorioController@listaPrematricula']);
  Route::post('relatorios/lista/cadastrados/busca-prematricula',['as'=>'relatorio.prematricula.buscar','uses'=> 'RelatorioController@BuscarAluno']);
  Route::get('relatorios/lista/Matriculados',['as'=>'relatorios.lista.matriculados','uses'=> 'RelatorioController@listaMatricula']);
  Route::post('relatorios/lista/matricula/busca-matricula',['as'=>'relatorio.matricula.buscar','uses'=> 'RelatorioController@buscaMatricula']);
  Route::get('relatorios/lista/prematricula/deletecadastro/{id}',['as'=>'relatorio.prematricula.destroy','uses'=>'RelatorioController@destroy']);
  Route::get('relatorios/lista/Renovacao',['as'=>'relatorio.renovacao.lista','uses'=> 'RelatorioController@listaRenovacao']);
  Route::get('relatorios/lista/Renovacao/visualizar-dados/{id}',['as'=>'renovacao.edit','uses'=>'RelatorioController@editrenovacao']);
  Route::put('relatorios/lista/Renovacao/atualizar-dados/{id}',['as'=>'renovacao.update','uses'=>'RelatorioController@update']);
  Route::get('relatorios/lista/renovacao/delete/{id}',['as'=>'relatorio.renovacao.destroy','uses'=>'RelatorioController@renovacaoDestroy']);
  

  /*------------------------------------------------------------------------------------------------------*/


  /*------------------------ROTAS DE ANOTAÇÕES----------------------------------------------------------------*/
  
  Route::get('anotacao/inicio',['as'=>'anotacao.index','uses'=>'AnotacaoController@index']);
  Route::get('anotacao/adicionar',['as'=>'anotacao.adicionar','uses'=>'AnotacaoController@create']);
  Route::post('anotacao/salvar',['as'=>'anotacao.store','uses'=>'AnotacaoController@store']);
  Route::get('anotacao/listar-anotações',['as'=>'anotacao.listar','uses'=> 'AnotacaoController@listaAnotacao']);
  Route::get('anotacao/lista/visualizar-dados/{id}',['as'=>'anotacao.edit','uses'=>'AnotacaoController@edit']);
  Route::put('anotacao/lista/atualizar-dados/{id}',['as'=>'anotacao.update','uses'=>'AnotacaoController@update']);
  Route::get('anotacao/lista/deleteanotacao/{id}',['as'=>'anotacao.destroy','uses'=>'AnotacaoController@destroy']);

  /*------------------------------------------------------------------------------------------------------*/
  
  /*----------------------- ROTAS DE PERFIL ----------------------------------------------------------------------*/

	Route::get('perfil/atualizar', ['as'=>'perfil.index','uses'=>'Site\SiteController@perfil']);
    Route::put('perfil/atualizar', ['as'=>'perfil.index.update','uses'=>'Site\SiteController@perfilUpdate']);

    /*-----------------------------------------------------------------------------------------------------------*/
	
	
	Route::get('pdf', 'PDFController@gerarpdf');

    //Route::get('', 'RelatorioController@listardados');
});



