@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                <h4 class="center">Editar Anotações</h4>
                <div class="row"></div>
                <form class="form-horizontal" id="regForm"  action="{{route('anotacao.update',$anotacao->id)}}" method="POST">
                    {{ csrf_field()}} {{ method_field('PUT') }}
                    <right>
                        <a>**Campos Obrigatórios**</a>
                    </right>
                    <div class="row"></div>
                    <div class="row"></div>

                    <div class="row">

                        <div class="input-field col s12 {{$errors->has('lembrete') ? 'has-error' : ''}} ">
                            <input type="text" name="lembrete" class="materialize-textarea" value="{{ isset($anotacao->lembrete)&& !old('lembrete') ?  $anotacao->lembrete : '' }}">
                            <label for="textarea1">Lembretes:</label>
                            @if($errors->has('lembrete'))
                            <span class="red-text">
                                <text>{{$errors->first('lembrete')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="col s12 m4">
                             <div class="input-field {{$errors->has('dataInicio') ? 'has-error' : ''}} ">
                                <input type="text" name="dataInicio" class="datepicker" value="{{ isset($anotacao->dataInicio) && !old('dataInicio') ?  $anotacao->dataInicio : '' }}">
                                <label>Data de Início</label>
                                @if($errors->has('dataInicio'))
                                <span class="red-text">
                                    <text>{{$errors->first('dataInicio')}}</text>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col s12 m4">
                             <div class="input-field {{$errors->has('horaInicio') ? 'has-error' : ''}} ">
                                <input type="text" name="horaInicio" class="timepicker" value="{{ isset($anotacao->horaInicio) && !old('horaInicio') ?  $anotacao->horaInicio : '' }}">
                                <label>Horario de Início</label>
                                @if($errors->has('horaInicio'))
                                <span class="red-text">
                                    <text>{{$errors->first('horaInicio')}}</text>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col s12 m4">
                             <div class="input-field {{$errors->has('horaTermino') ? 'has-error' : ''}} ">
                                <input type="text" name="horaTermino" class="timepicker" value="{{ isset($anotacao->horaTermino) && !old('horaTermino') ?  $anotacao->horaTermino : '' }}">
                                <label>Horário de Término</label>
                                @if($errors->has('horaTermino'))
                                <span class="red-text">
                                    <text>{{$errors->first('horaTermino')}}</text>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row"></div>
                        <div class="row">
                            <button class="btn orange darken-4 btn-info right">Salvar
                                <i class="material-icons left">edit</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </form>
</div>
</div>

@endsection