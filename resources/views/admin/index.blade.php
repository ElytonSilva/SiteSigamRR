@extends('layouts.app') @section('content') 
<div class="container">
    <div class="row center">
        <h2>Painel Administrativo</h2>
    </div>

    @include('admin._caminho')
    <div class="row">

        <div class="col s12 m6">
            <div class="card green darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Perfil</span>
                    <p>Alterar Dados de Perfil</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>
        
        @can('usuario-view')
        <div class="col s12 m6">
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Usuario</span>
                    <p>Listar Usuario cadastrados</p>
                </div>
                <div class="card-action">
                    <a href="{{route('usuarios.index')}}">Visualizar</a>
                </div>
            </div>
        </div>
       @endcan
        @can('papel-view')
        <div class="col s12 m6">
            <div class="card teal darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Papéis</span>
                    <p>Configurações de Acesso</p>
                </div>
                <div class="card-action">
                    <a href="{{route('papeis.index')}}">Visualizar</a>
                </div>
            </div>
        </div>
        @endcan


        <div class="col s12 m6">
            <div class="card light-blue darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Pré- Matricula</span>
                    <p>Realizar Pré-Matricula</p>
                </div>
                <div class="card-action">
                    <a href="{{route('prematricula.index')}}">Visualizar</a>
                </div>
            </div>
        </div>
        
        @can('matricula-view')
        <div class="col s12 m6">
            <div class="card red darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Matricula</span>
                    <p>Painel de Matriculados</p>
                </div>
                <div class="card-action">
                    <a href="{{route('matricula.index')}}">Visualizar</a>
                </div>
            </div>
        </div>
        @endcan
        

        @can('renovacao-view')
        <div class="col s12 m6">
            <div class="card  teal darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Renovação</span>
                    <p>Renovar Matricula</p>
                </div>
                <div class="card-action">
                    <a href="#">Visualizar</a>
                </div>
            </div>
        </div>
        @endcan




    </div>


</div>

@endsection