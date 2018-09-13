@extends('layouts.app') @section('content') @component('componente.slide',['lista' =>$slides]) @endcomponent

<style>
    .landing-page .small-box {
        border-radius: 2px;
        position: relative;
        display: block;
        margin-bottom: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }

    .landing-page .navy-line {
        text-align: center;
        width: 70px;
        height: 1px;
        margin: 60px auto 0;
        border-bottom: 4px solid #0f4e96;
    }

    .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
</style>
<div class="container">


    <div class="row landing-page navy-line">
        <div class="col-lg-12 text-center ">
            <div class="navy-line "></div>
            <center>
                <h4>Painel Principal</h4>
            </center>
        </div>

    </div>
    <div class="row">

        <div class="col s12 m6">
            <div class="card red darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Pré- Matricula</span>
                    <p>Realizar Pré-Matricula</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card indigo darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Boletim Escolar</span>
                    <p>Visualizar Boletim Escolar</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>

        

        <div class="col s12 m6">
            <div class="card  light-blue darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Renovação</span>
                    <p>Renovar Matricula</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card  grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Declaração</span>
                    <p>Solicitar Declaração Escolar</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card deep-orange darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Transferência</span>
                    <p>Solicitar Transferência</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>



    </div>


</div>

@endsection