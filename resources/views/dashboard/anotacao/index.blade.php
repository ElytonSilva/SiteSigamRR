@extends('layouts.app') @section('content')
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
    <h5 class="center">Painel do Cadastro de Matricula</h5>
    @include('admin._caminho')
    <div class="row">
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
            <div class="card yellow darken-3">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Cadastrar Anotações</span>
                            <p>Cadastrar Anotações</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('anotacao.adicionar')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="responsive-img"
                        src="{{ url('imagens/icons/pen.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 hvr-buzz-out hvr-buzz-out">
            <div class="card amber darken-3">
                <div class="row">
                    <div class="col s8 m8">
                        <div class="card-content white-text">
                            <span class="card-title">Lista de Anotações</span>
                            <p>Exibir Anotações Cadastrados</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('anotacao.listar')}}" style="color:white; font-weight:bold;">Entrar</a>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <img 
                        class="responsive-img"
                        src="{{ url('imagens/icons/list.png') }}"
                        style="
                        position:relative; 
                        float:right; 
                        margin:10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection