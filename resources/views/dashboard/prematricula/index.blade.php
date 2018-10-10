@extends('layouts.app')
@section('content')
<div class="container">
    <h5 class="center">Formulário de Pré-Matrícula</h5>
    @include('dashboard._caminho')
    <div class="row">
        <form class="form-horizontal " id="regForm" action="{{route('prematricula.store')}}" method="POST">
            {{ csrf_field()}}
            <div class="card-panel white">
                <div class="row">
                    <div class="col s12">

                        <div class="input-field col s6 {{$errors->has('nomemae') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomemae" class="validate" value="{{old('nomemae')}}" required="" aria-required="true">
                            <label for="icon_prefix">Nome da Mãe do Aluno</label>
                        </div>

                        <div class="input-field col s6 {{$errors->has('nomepai') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nomepai" class="validate" value="{{old('nomepai')}}" required="" aria-required="true">
                            <label for="icon_prefix">Nome do Pai do Aluno</label>
                        </div>

                        <div class="input-field col s6 {{$errors->has('nomealuno') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">face</i>
                            <input type="text" name="nomealuno" class="validate" value="{{old('nomealuno')}}" required="" aria-required="true">
                            <label for="icon_prefix">Nome do Filho(a)</label>
                        </div>


                        <div class="input-field col s6 {{$errors->has('contatomae') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">call</i>
                            <input type="text" name="contatomae" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" class="validate" value = "{{old('contatomae')}}" required="" aria-required="true">
                            <label>Telefone da mãe</label>
                        </div>

                        <div class="input-field col s6 {{$errors->has('contatopai') ? 'has-error' : ''}} ">
                            <i class="material-icons prefix">call</i>
                            <input type="text" name="contatopai" id="telefone1" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" class="validate" value = "{{old('contatopai')}}" required="" aria-required="true">
                            <label>Telefone do pai</label>
                        </div>

                        <div class="input-field col s6 {{$errors->has('cpfmae') ? 'has-error' : ''}}">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input type="text" name="cpfmae" id= "cpf" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" class="validate" value = "{{old('cpfmae')}}" required="" aria-required="true">
                            <label>N° CPF do Mãe</label>
                        </div>

                        <div class="input-field col s6 {{$errors->has('cpfpai') ? 'has-error' : ''}}">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input type="text" name="cpfpai" id= "cpftwo" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" class="validate" value = "{{old('cpfpai')}}" required="" aria-required="true">
                            <label>N° CPF do Pai</label>
                        </div>

                        <div class="input-field col s6 ">
                            <i class="material-icons prefix">code</i>
                            <label>Senha Gerada: </label>

                            <input disabled="false" type="text" id="textsenha" name="senha" class="validate" value="{{ gerar_codigo($saida) }}"
                            style="color: #FF5722; letter-spacing: 3px; font-weight: bold;">
                            
                        </div>

                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                            <div class="col s12 m6 ">
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
                            <button type = "submit" class="btn orange darken-4 btn-info right">Salvar
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