@extends('layouts.app')
@section('content')
<style>
img {
  -webkit-filter: drop-shadow(5px 5px 5px #222 );
  filter: drop-shadow(5px 5px 5px #222);
}

/* Buzz */
@-webkit-keyframes hvr-buzz {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}
@keyframes hvr-buzz {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}
.hvr-buzz {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}
.hvr-buzz:hover, .hvr-buzz:focus, .hvr-buzz:active {
  -webkit-animation-name: hvr-buzz;
  animation-name: hvr-buzz;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

/* Buzz Out */
@-webkit-keyframes hvr-buzz-out {
  10% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  20% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
  30% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  40% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
  50% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg);
  }
  60% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg);
  }
  70% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg);
  }
  80% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg);
  }
  90% {
    -webkit-transform: translateX(1px) rotate(0);
    transform: translateX(1px) rotate(0);
  }
  100% {
    -webkit-transform: translateX(-1px) rotate(0);
    transform: translateX(-1px) rotate(0);
  }
}
@keyframes hvr-buzz-out {
  10% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  20% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
  30% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  40% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
  50% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg);
  }
  60% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg);
  }
  70% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg);
  }
  80% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg);
  }
  90% {
    -webkit-transform: translateX(1px) rotate(0);
    transform: translateX(1px) rotate(0);
  }
  100% {
    -webkit-transform: translateX(-1px) rotate(0);
    transform: translateX(-1px) rotate(0);
  }
}
.hvr-buzz-out {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}
.hvr-buzz-out:hover, .hvr-buzz-out:focus, .hvr-buzz-out:active {
  -webkit-animation-name: hvr-buzz-out;
  animation-name: hvr-buzz-out;
  -webkit-animation-duration: 0.75s;
  animation-duration: 0.75s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1;
}
</style>
<div class="container">
    <h5 class="center">Painel Administrativo</h5>

    @include('admin._caminho')
    <div class="row">
        @can('perfil-view')
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/user_edit.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('usuario-view')
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/user.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('papel-view')
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/key.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('prematricula-view')
        <div class="col s12 m6 hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/confirm.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan
        
        @can('matricula-view')
        <div class="col s12 m6 hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/matricula.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('renovacao-view')
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/user_confirm.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('relatorios-view')
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
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
                        class="responsive-img"
                        src="{{ url('imagens/icons/relatorio.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        @endcan
    </div>

</div>

@endsection