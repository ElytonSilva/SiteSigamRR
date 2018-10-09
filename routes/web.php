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

Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {

  Route::get('/', 'Admin\AdminController@index');
  Route::resource('usuarios', 'Admin\UsuarioController');

  Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
  Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
  Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);
  
  Route::resource('papeis', 'Admin\PapelController');  
  
  Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
  Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
  Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);


  Route::resource('matricula', 'MatriculaController');

  Route::get('matricula/listar/alunoscadastrados',['as'=>'matricula.lista','uses'=> 'MatriculaController@lista']);
  Route::get('matricula/Dados/{id}',['as'=>'matricula.vermais','uses'=>'MatriculaController@vermais']); 


  
  //Route::get('matricula/create',['as'=>'matricula.create','uses'=>'MatriculaController@create']);
  //Route::post('matricula/cadastrar',['as'=>'matricula.store','uses'=>'MatriculaController@store']);
  
    Route::get('/prematricula/criar',['as'=>'prematricula.index','uses'=>'PreMatriculaController@index']);
  //Route::post('/prematricula/salvar',['as'=>'prematricula.store','uses'=>'PreMatriculaController@store']);
    Route::post('matricula/listar/alunoscadastrados/busca',['as'=>'matricula.buscar','uses'=> 'MatriculaController@busca']);
	
	Route::get('perfil/atualizar', ['as'=>'perfil.index','uses'=>'Site\SiteController@perfil']);
	Route::put('perfil/atualizar', ['as'=>'perfil.index.update','uses'=>'Site\SiteController@perfilUpdate']);
});



