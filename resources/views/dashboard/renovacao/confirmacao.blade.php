@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
    </div>
    <div class="row">
        <center>
            <h4>Solicitação de Renovação Concluída<br>

                Nome do Aluno: {{$renovacao->nomealuno}}
            </h4>
        </center>
        <div class="col s12">
            <div class="card-panel white">
                <form class="form-horizontal" action="#" method="POST">
                    {{ csrf_field()}}
                    <div class="row">
                        <center>
                            <b><u>
                                    <p class='col s12'>Dados Cadastrados</p></b>
                        </center>


                        <div class="row"></div>
                        <div class="col s12">

                            <div class="input-field col s4 ">
                                <b>Nome do pai:</b>
                                <strong>{{$renovacao->nomerespo}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Contato do Pai:</b>
                                <strong>{{$renovacao->nomealuno}}</strong>
                                <br>

                            </div>


                        </div>

                        <div class="row"></div>
                        <div class="row"></div>


                        <a title="Voltar Para Página Principal" class="btn orange darken-4 btn-info left " href="/admin">Voltar
                            <i class="material-icons left">arrow_back_ios</i>
                        </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection