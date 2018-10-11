@extends('layouts.app') @section('content') 
<div class="container">
    <h5 class="center">Painel do Cadastro de Matricula</h5>
    @include('admin._caminho')
    <div class="row">
        <div class="col s12 m6">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Cadastrar Matricula</span>
                    <p>Cadastrar Alunos</p>
                </div>
                <div class="card-action">
                    <a href="{{route('matricula.create')}}" style="color:white; font-weight:bold;">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card blue-grey darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Lista de Matriculado</span>
                    <p>Exibir Alunos Cadastrados</p>
                </div>
                <div class="card-action">
                    <a href="{{route('matricula.lista')}}" style="color:white; font-weight:bold;">Entrar</a>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection