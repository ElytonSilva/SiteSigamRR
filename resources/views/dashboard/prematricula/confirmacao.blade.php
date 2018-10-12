@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
    </div>
    <div class="row">
        <center>
            <h4>Confirmação Cadastro Pré-Matricula <br>
			
				Nome do Aluno: {{$prematricula->nomealuno}}
			</h4>
        </center>
		<div class="col s12">
				<div class="card-panel white">
                <form class="form-horizontal" action="#" method="POST">
                    {{ csrf_field()}}
                    <div class="row">
                        <center>
                            <b><u><p class='col s12'>Dados Cadastrados</p></b>
                        </center>


                        <div class="row"></div>
                        <div class="col s12">
				
                            <div class="input-field col s4 ">
                                <b>Nome do pai:</b>
                                <strong>{{$prematricula->nomepai}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Contato do Pai:</b>
                                <strong>{{$prematricula->contatopai}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Nome da Mãe:</b>
                                <strong>{{$prematricula->nomemae}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Contato da Mãe:</b>
                                <strong>{{$prematricula->contatomae}}</strong>
                                <br>

                            </div>
							
							<div class="input-field col s4 ">
                                <b>Nome do Filho(a):</b>
                                <strong>{{$prematricula->nomealuno}}</strong>
                                <br>

                            </div>
							
							<div class="input-field col s4 ">
                                <b>Senha Gerada:</b>
                                <strong>{{$prematricula->senha}}</strong>
                                <br>

                            </div>

                        </div>
						
                        <div class = "row"></div>
                        <div class = "row"></div>

                    
						<a title="Voltar Para Página Principal" class="btn orange darken-4 btn-info left " href="/admin">Voltar
                            <i class="material-icons left">arrow_back_ios</i>
                        </a>

                        <a title="Voltar Para Página Principal" class="btn green right" href="{{route('prematricula.gerarpdf', $prematricula->id)}}" >Gerar Comprovante
                                <i class="material-icons left">file_download</i>
                        </a>
                       
					   
                    </div>    
                </form>
                    
            </div> 
        </div>
    </div>
</div>    
@endsection