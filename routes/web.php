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
    Route::post('/prematricula/{id}/comprovantepdf',['as'=>'prematricula.gerarpdf','uses'=>'PDFController@gerarpdf']);

  /*-----------------------------------------------------------------------------------------------------------*/


  /*-----------------------ROTAS DE RELATORIOS---------------------------------------------------------------*/

  Route::get('relatorios/inicio',['as'=>'relatorios.index','uses'=>'RelatorioController@index']);
  Route::get('relatorios/listar/cadastrados',['as'=>'relatorios.lista','uses'=> 'RelatorioController@lista']);
  Route::post('relatorios/lista/cadastrados/busca-prematricula',['as'=>'relatorio.prematricula.buscar','uses'=> 'RelatorioController@BuscarAluno']);
  

  /*------------------------------------------------------------------------------------------------------*/

  
  /*----------------------- ROTAS DE PERFIL ----------------------------------------------------------------------*/

	Route::get('perfil/atualizar', ['as'=>'perfil.index','uses'=>'Site\SiteController@perfil']);
    Route::put('perfil/atualizar', ['as'=>'perfil.index.update','uses'=>'Site\SiteController@perfilUpdate']);

    /*-----------------------------------------------------------------------------------------------------------*/


});



