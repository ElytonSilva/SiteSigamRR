@extends('layouts.app')
@section('content')
<div class="container">
    <h5 class="center">Painel de Renovação</h5>
    @include('admin._caminho')
    <div class="row">
        <form class="form-horizontal " id="regForm" action="{{route('renovacao.store')}}" method="POST">
            {{ csrf_field()}}
            <div class="card-panel white">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field {{$errors->has('nomerespo') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomerespo" class="validate" value="{{old('nomerespo')}}" required="" aria-required="true">
                            <label for="icon_prefix">Nome do Pai ou Mãe do Aluno</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field {{$errors->has('nomealuno') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomealuno" class="validate" value="{{old('nomealuno')}}" required="" aria-required="true">
                            <label for="icon_prefix">Nome do Aluno</label>
                        </div>
                    </div>

                    

                    <div class="col s12 m6">
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                            <div>
                                <div class="card-panel white ">
                                    <b class="black-text">AVISO? </b></br></br>

                                    <span>• Por favor Senhor(a) Responsável(a) Solicitamos que após solicitar renovação
                                        procure a secretaria da escola para confirmar a renovação e verificar se existe pendência de documentos do aluno</span></br></br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                    <div class="col s12 ">
                        <button type = "submit" class="btn orange darken-4 btn-info right">Confirmar
                            <i class="material-icons left">save</i>
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection