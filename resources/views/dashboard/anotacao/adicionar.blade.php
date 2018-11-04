@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                <h4 class="center">Formulário de Anotações</h4>
                <div class="row"></div>
                <form action="{{route('anotacao.store')}}" method="post">
                    {{csrf_field()}}
                    <right>
                        <a>**Campos Obrigatórios**</a>
                    </right>
                    <div class="row"></div>
                    <div class="row"></div>

                    <div class="row">

                        <div class="input-field col s12 {{$errors->has('nomealuno') ? 'has-error' : ''}} ">
                            <textarea id="textarea1" name="lembrete" class="materialize-textarea" value = "{{old('lembrete')}}"></textarea>
                            <label for="textarea1">Lembretes:</label>
                            @if($errors->has('lembrete'))
                            <span class="red-text">
                                <text>{{$errors->first('lembrete')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="col s12 m4">
                             <div class="input-field {{$errors->has('dataInicio') ? 'has-error' : ''}} ">
                                <input type="text" name="dataInicio" class="datepicker" value = "{{old('dataInicio')}}">
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
                                <input type="text" name="horaInicio" class="timepicker" value = "{{old('horaInicio')}}">
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
                                <input type="text" name="horaTermino" class="timepicker" value = "{{old('horaTermino')}}">
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
                                <i class="material-icons left">save</i>
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