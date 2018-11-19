@extends('layouts.app')
@section('content')
<div class="container">
    <h5 class="center">Editar Status da Renovação</h5>
    @include('admin._caminho')
    <div class="row">
        <form class="form-horizontal " id="regForm" action="{{route('renovacao.update',$renovacao->id)}}" method="POST">
            <div class="card-panel white">
                {{ csrf_field()}} {{ method_field('PUT') }}
                <div class="row">

                    <div class="col s12 m6">
                        <div class="input-field {{$errors->has('nomerespo') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomerespo" class="validate"  value="{{ isset($renovacao->nomerespo)&& !old('nomerespo') ?  $renovacao->nomerespo : '' }} {{old('nomerespo')}}">
                            <label for="icon_prefix">Nome do Pai ou Mãe do Aluno</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field {{$errors->has('nomealuno') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomealuno" class="validate"  value="{{ isset($renovacao->nomealuno)&& !old('nomealuno') ?  $renovacao->nomealuno : '' }} {{old('nomealuno')}}">
                            <label for="icon_prefix">Nome do Aluno</label>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field {{$errors->has('status') ? 'has-error' : ''}}">
                            <i class="material-icons prefix">edit_attributes</i>
                            <select name="status">
                                <option value="" disabled selected>Selecione uma opção </option>
                                <option value="Pendente" {{ old( 'status', $renovacao->status) == 'Pendente' ?
                                    'selected' : '' }}>Pendente</option>
                                <option value="Aprovado" {{ old( 'status', $renovacao->status) == 'Aprovado' ?
                                    'selected' : '' }}>Aprovado</option>

                            </select>
                            <label>Status</label>

                        </div>
                    </div>

                    <div class="col s12 ">
                        <button type="submit" class="btn orange darken-4 btn-info right">Atualizar
                            <i class="material-icons left">save</i>
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection