@extends('layouts.app') @section('content')
<div class="container">
    <div class="row center">
        <h2>PAINEL ADMINISTRATIVO</h2>
    </div>

    @include('admin._caminho')
    <div class="row">
        @can('perfil-view')
        <div class="col s12 m6">
            <div class="card indigo lighten-1">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Perfil</span>
                            <p>Alterar Dados de Perfil</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('perfil.index')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/user_edit.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('usuario-view')
        <div class="col s12 m6">
            <div class="card light-blue darken-3">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Usuario</span>
                            <p>Listar Usuario cadastrados</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('usuarios.index')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/user.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('papel-view')
        <div class="col s12 m6">
            <div class="card cyan darken-3">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Papéis</span>
                            <p>Configurações de Acesso</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('papeis.index')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/key.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('papel-view')
        <div class="col s12 m6">
            <div class="card green darken-2">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Pré- Matricula</span>
                            <p>Realizar Pré-Matricula</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('prematricula.index')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/confirm.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan
        
        @can('papel-view')
        <div class="col s12 m6">
            <div class="card amber darken-2">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Matricula</span>
                            <p>Painel de Matriculados</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('matricula.index')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/matricula.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('renovacao-view')
        <div class="col s12 m6">
            <div class="card deep-orange">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Renovação</span>
                            <p>Renovar Matricula</p>
                        </div>
                        <div class="card-action">
                            <a href="#" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/user_confirm.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan


        <div class="col s12 m6">
            <div class="card brown darken-1">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Relatórios</span>
                            <p>Pré-Matricula e Renovações</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('relatorios.index')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="img-responsive"
                        src="imagens/icons/relatorio.png"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;
                        widht:98px; height:98px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection