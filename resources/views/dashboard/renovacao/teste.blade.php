@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
    </div>
    <div class="row">
        <center>
            <h4>Solicitar Renovação <br>

            </h4>
        </center>
        <div class="col s12">
            <div class="card-panel white">

                <form class="form-horizontal" action="#" method="POST">

                    <center>
                        <b>
                            <p class='col s12'>Dados Cadastrados</p>
                        </b>
                    </center>
                    @foreach($matricula as $matric)
                    <div class="row">



                        <div class="row"></div>
                        <div class="col s12">


                            <div class="col s12 m4 ">
                                <b>Nome do Pai e Mae :</b>
                                <strong>{{$matric->nomedopai}}</strong>,
                                <strong>{{$matric->nomedamae}}</strong>
                                <br>

                            </div>

                            
                            <div class="col s12 m4 ">
                                <b>Nome do Aluno:</b>
                                <strong>{{$matric->nomealuno}}</strong>
                                <br>

                            </div>



                        </div>
                        @endforeach   
                       
                        <div class="row"></div>
                        <div class="row"></div>

                        
                        <div class="col s12 m6">
                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="row">
                                <div>
                                    <div class="card-panel white ">
                                        <b class="black-text">AVISO? </b></br></br>

                                        <span>• Por favor Senhor(a) Responsável(a) Solicitamos que após solicitar
                                            renovação
                                            procure a secretaria da escola para confirmar a renovação e verificar se
                                            existe pendência de documentos do aluno</span></br></br>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    
                        

                   

                    <div class="row">

                        <a title="Voltar Para Página Principal" class="btn orange darken-4 btn-info left " href="/admin">Voltar
                            <i class="material-icons left">arrow_back_ios</i>
                        </a>
        
                        <button type="submit" class="btn orange darken-4 btn-info right">Confirmar
                            <i class="material-icons left">save</i>
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection