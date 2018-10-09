@extends('layouts.app') @section('content')

<div class="container">
    <div class="row"></div>
    <div class="row">
        <h4 class="center">Formulário de Pré-Matrícula</h4>
    </div>

    <div class="row">
        <form class="form-horizontal " id="regForm" action="{{route('prematricula.store')}}" method="POST">
            {{ csrf_field()}}
            <div class="card-panel white">
                <div class="row">
                    <div class="col s12">

                        <div class="input-field col s6 {{$errors->has('nomemae') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomemae" class="validate" value="{{old('nomemae')}}">
                            <label for="icon_prefix">Nome da Mãe do Aluno</label>
                            @if($errors->has('nomemae'))
                            <span class="red-text">
                                <text>{{$errors->first('nomemae')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s6 {{$errors->has('nomepai') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomepai" class="validate" value="{{old('nomepai')}}">
                            <label for="icon_prefix">Nome do Pai do Aluno</label>
                            @if($errors->has('nomepai'))
                            <span class="red-text">
                                <text>{{$errors->first('nomepai')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s6 {{$errors->has('nomealuno') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">face</i>
                            <input type="text" name="nomealuno" class="validate" value="{{old('nomealuno')}}">
                            <label for="icon_prefix">Nome do Filho(a)</label>
                            @if($errors->has('nomealuno'))
                            <span class="red-text">
                                <text>{{$errors->first('nomealuno')}}</text>
                            </span>
                            @endif
                        </div>


                        <div class="input-field col s6 {{$errors->has('contatomae') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">call</i>
                            <input id="icon_telephone" type="text" name="contatomae" class="validate" value="{{old('contatomae')}}">
                            <label for="icon_telephone">Telefone da Mãe</label>
                            @if($errors->has('contatomae'))
                            <span class="red-text">
                                <text>{{$errors->first('contatomae')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s6 {{$errors->has('contatopai') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">call</i>
                            <input id="icon_telephone" type="text" name="contatopai" class="validate" value="{{old('contatopai')}}">
                            <label for="icon_telephone">Telefone do Pai</label>
                            @if($errors->has('contatopai'))
                            <span class="red-text">
                                <text>{{$errors->first('contatopai')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s6 {{$errors->has('cpfmae') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input id="icon_telephone" type="text" name="cpfmae" id="cpf" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
                                class="validate" value="{{old('cpfmae')}}">
                            <label for="icon_telephone">N° CPF da Mãe</label>
                            @if($errors->has('cpfmae'))
                            <span class="red-text">
                                <text>{{$errors->first('cpfmae')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s6 {{$errors->has('cpfpai') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input id="icon_telephone" type="text" name="cpfpai" id="cpf" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
                                class="validate" value="{{old('cpfpai')}}">
                            <label for="icon_telephone">N° CPF do Pai</label>
                            @if($errors->has('cpfpai'))
                            <span class="red-text">
                                <text>{{$errors->first('cpfpai')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s4 ">
                            <i class="material-icons prefix">code</i>
                            <label>Senha Gerada: </label>

                            <input type="text" id="textsenha" name="senha" class="validate" value="{{ gerar_codigo($saida) }}">

                            <a type="button" id="gerarsenha" class="waves-effect waves-light btn" href="{{ route('prematricula.index') }}">
                                <i class="material-icons left">vpn_key</i>Gerar</a>
                            </a>
                        </div>

                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                            <div class="col s12 m5 ">
                                <div class="card-panel white ">
                                    <b class="black-text">Documentos Necessários para Matrícula ? </b></br></br>

                                    <span>• Xérox do Histórico Escola ou Declaração com notas;</span></br></br>
                                    <span>• Xérox do RG ou Certidão de Nascimento e CPF;</span></br></br>
                                    <span>• Xérox do comprovante de residência;</span></br></br>
                                    <span>• Xérox do cartão de vacina;</span></br></br>
                                    <span>• 01 Foto 3x4;</span></br></br>
                                    <span>• Xérox do RG do responsável pelo aluno;</span></br></br>
                                    <span>• Xérox do Laudo do comprobatório de Defiência do aluno, se for o caso;</span></br></br>
                                    <span>• Xérox do Cartão do Programa Bolsa Família e RG do titular do cartão;</span></br></br>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="col s12">
                            <button class="btn orange darken-4 btn-info right">Salvar
                                <i class="material-icons left">save</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection