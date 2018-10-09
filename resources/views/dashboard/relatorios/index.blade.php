@extends('layouts.app') @section('content') 
<div class="container">
    <div class="row center">
        <h2>Relatórios</h2>
    </div>

    @include('admin._caminho')
    <div class="row">

        <div class="col s12 m6">
            <div class="card cyan darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Exibir Lista Cadastrado Pré Matricula</span>
                    <p>Exibir Lista de Cadastrados</p>
                </div>
                <div class="card-action">
                    <a href="{{route('relatorios.lista')}}" style="color:white; font-weight:bold;">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card light-green darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Lista de Renovações</span>
                    <p>Exibir Lista de Renovações</p>
                </div>
                <div class="card-action">
                    <a href="#" style="color:white; font-weight:bold;">Entrar</a>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection