@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                <h4 class="center">Formulário de Edição</h4>
                <div class="row"></div>
                <form class="form-horizontal" id="regForm" action="{{route('matricula.update',$matricula->id)}}" method="POST">
                    {{ csrf_field()}} {{ method_field('PUT') }}
                    <right>
                        <a>**Campos Obrigatórios**</a>
                    </right>
                    <div class="row"></div>
                    <div class="row"></div>

                    <div class="row">

                        <div class="input-field col s4 {{$errors->has('nomealuno') ? 'has-error' : ''}}">
                            <input type="text" name="nomealuno" class="validate" value="{{ isset($matricula->nomealuno)&& !old('nomealuno') ?  $matricula->nomealuno : '' }} {{old('nomealuno')}}">
                            <label>Nome do Aluno(a)</label>
                            @if($errors->has('nomealuno'))
                            <span class="red-text">
                                <text>{{$errors->first('nomealuno')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('sexo') ? 'has-error' : ''}}">
                            <select name="sexo">
                                <option value="" disabled selected>Selecione uma opção</option>
                                <option value="Masculino" {{ old( 'sexo', $matricula->sexo) == 'Masculino' ? 'selected' :
                                    '' }}>Masculino</option>
                                <option value="Feminino" {{ old( 'sexo', $matricula->sexo) == 'Feminino' ? 'selected' : ''
                                    }}>Feminino</option>

                            </select>
                            <label>Sexo</label>
                            @if($errors->has('sexo'))
                            <span class="red-text">
                                <text>{{$errors->first('sexo')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s4 {{$errors->has('serieano') ? 'has-error' : ''}}">
                            <input type="text" name="serieano" class="validate" value="{{ isset($matricula->serieano)&& !old('serieano') ?  $matricula->serieano : '' }}{{old('serieano')}}">
                            <label>Serie/Ano</label>
                            @if($errors->has('serieano'))
                            <span class="red-text">
                                <text>{{$errors->first('serieano')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('datanascimento') ? 'has-error' : ''}}">
                            <input type="text" name="datanascimento" class="datepicker" value="{{ isset($matricula->datanascimento)&& !old('datanascimento') ?  $matricula->datanascimento : '' }}{{old('datanascimento')}}">
                            <label>Data de Nascimento</label>
                            @if($errors->has('datanascimento'))
                            <span class="red-text">
                                <text>{{$errors->first('datanascimento')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('naturalidade') ? 'has-error' : ''}}">
                            <input type="text" name="naturalidade" class="validate" value="{{ isset($matricula->naturalidade)&& !old('naturalidade') ?  $matricula->naturalidade : '' }} {{old('naturalidade')}}">
                            <label>Naturalidade</label>
                            @if($errors->has('naturalidade'))
                            <span class="red-text">
                                <text>{{$errors->first('naturalidade')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('uf') ? 'has-error' : ''}}">
                            <input type="text" name="uf" class="validate" value="{{ isset($matricula->uf)&& !old('uf') ?  $matricula->uf : '' }} {{old('uf')}}">
                            <label>UF</label>
                            @if($errors->has('uf'))
                            <span class="red-text">
                                <text>{{$errors->first('uf')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('quantdirmao') ? 'has-error' : ''}}">
                            <input type="text" name="quantdirmao" class="validate" value="{{ isset($matricula->quantdirmao)&& !old('quantdirmao') ?  $matricula->quantdirmao : '' }} {{old('quantdirmao')}}">
                            <label>Quantidade de Irmãos </label>
                            @if($errors->has('quantdirmao'))
                            <span class="red-text">
                                <text>{{$errors->first('quantdirmao')}}</text>
                            </span>
                            @endif

                        </div>


                        <div class="input-field col s4 {{$errors->has('cor') ? 'has-error' : ''}}">
                            <select name="cor">
                                <option value="" disabled selected>Selecione uma opção</option>
                                <option value="Branca" {{ old( 'cor', $matricula->cor) == 'Branca' ? 'selected' : '' }}>Branca</option>
                                <option value="Parda" {{ old( 'cor', $matricula->cor) == 'Parda' ? 'selected' : '' }}>Parda</option>
                                <option value="Indigina" {{ old( 'cor', $matricula->cor) == 'Indigina' ? 'selected' : ''
                                    }}>Indigina</option>
                                <option value="Negra" {{ old( 'cor', $matricula->cor) == 'Negra' ? 'selected' : '' }}>Negra</option>
                                <option value="Não Declarado" {{ old( 'cor', $matricula->cor) == 'Não Declarado' ? 'selected'
                                    : '' }}>Não Declarado</option>
                            </select>
                            <label>Cor</label>
                            @if($errors->has('cor'))
                            <span class="red-text">
                                <text>{{$errors->first('cor')}}</text>
                            </span>
                            @endif
                        </div>

                        <div class="input-field col s4 {{$errors->has('endereço') ? 'has-error' : ''}}">
                            <input type="text" name="endereço" id="endereco" class="validate" value="{{ isset($matricula->endereço)&& !old('endereço') ?  $matricula->endereço : '' }} {{old('endereço')}}">
                            <label>Endereço</label>
                            @if($errors->has('endereço'))
                            <span class="red-text">
                                <text>{{$errors->first('endereço')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('numero') ? 'has-error' : ''}}">
                            <input type="text" name="numero" class="validate" value="{{ isset($matricula->numero)&& !old('numero') ?  $matricula->numero : '' }} {{old('numero')}}">
                            <label>Número</label>
                            @if($errors->has('numero'))
                            <span class="red-text">
                                <text>{{$errors->first('numero')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('cep') ? 'has-error' : ''}}">
                            <input type="text" name="cep" id="cep" pattern="[0-9]{5}-[0-9]{3}" class="validate" value="{{ isset($matricula->cep)&& !old('cep') ?  $matricula->cep : '' }} {{old('cep')}}">
                            <label>CEP</label>
                            @if($errors->has('cep'))
                            <span class="red-text">
                                <text>{{$errors->first('cep')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('bairro') ? 'has-error' : ''}}">
                            <input type="text" name="bairro" id="bairro" class="validate" value="{{ isset($matricula->bairro)&& !old('bairro') ?  $matricula->bairro : '' }} {{old('bairro')}}">
                            <label>Bairro</label>
                            @if($errors->has('bairro'))
                            <span class="red-text">
                                <text>{{$errors->first('bairro')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('nomedopai') ? 'has-error' : ''}}">
                            <input type="text" name="nomedopai" class="validate" value="{{ isset($matricula->nomedopai)&& !old('nomedopai') ?  $matricula->nomedopai : '' }} {{old('nomedopai')}}">
                            <label>Nome do pai</label>
                            @if($errors->has('nomedopai'))
                            <span class="red-text">
                                <text>{{$errors->first('nomedopai')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('contatodopai') ? 'has-error' : ''}}">
                            <input type="text" name="contatodopai" class="validate" value="{{ isset($matricula->contatodopai)&& !old('contatodopai') ?  $matricula->contatodopai : '' }} {{old('contatodopai')}}">
                            <label>Contato do pai</label>
                            @if($errors->has('contatodopai'))
                            <span class="red-text">
                                <text>{{$errors->first('contatodopai')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('nomedamae') ? 'has-error' : ''}}">
                            <input type="text" name="nomedamae" class="validate" value="{{ isset($matricula->nomedamae)&& !old('nomedamae') ?  $matricula->nomedamae : '' }} {{old('nomedamae')}}">
                            <label>Nome da Mae</label>
                            @if($errors->has('nomedamae'))
                            <span class="red-text">
                                <text>{{$errors->first('nomedamae')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('contatodamae') ? 'has-error' : ''}}">
                            <input type="text" name="contatodamae" class="validate" value="{{ isset($matricula->contatodamae)&& !old('contatodamae') ?  $matricula->contatodamae : '' }} {{old('contatodamae')}}">
                            <label>Contato da Mae</label>
                            @if($errors->has('contatodamae'))
                            <span class="red-text">
                                <text>{{$errors->first('contatodamae')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('numRG') ? 'has-error' : ''}}">
                            <input type="text" name="numRG" class="validate" value="{{ isset($matricula->numRG)&& !old('numRG') ?  $matricula->numRG : '' }} {{old('numRG')}}">
                            <label>N° do RG</label>
                            @if($errors->has('numRG'))
                            <span class="red-text">
                                <text>{{$errors->first('numRG')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('orgaoexpedidor') ? 'has-error' : ''}}">
                            <input type="text" name="orgaoexpedidor" class="validate" value="{{ isset($matricula->orgaoexpedidor)&& !old('orgaoexpedidor') ?  $matricula->orgaoexpedidor : '' }}{{old('orgaoexpedidor')}}">
                            @if($errors->has('orgaoexpedidor'))
                            <span class="red-text">
                                <text>{{$errors->first('orgaoexpedidor')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('dataexpedicao') ? 'has-error' : ''}}">
                            <input type="text" name="dataexpedicao" class="datepicker" value="{{ isset($matricula->dataexpedicao)&& !old('dataexpedicao') ?  $matricula->dataexpedicao : '' }} {{old('dataexpedicao')}}">
                            <label>Data expedição</label>
                            @if($errors->has('dataexpedicao'))
                            <span class="red-text">
                                <text>{{$errors->first('dataexpedicao')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('cpf') ? 'has-error' : ''}}">
                            <input type="text" name="cpf" class="validate" disabled value="{{ isset($matricula->cpf) && !old('cpf') ?  $matricula->cpf : '' }} {{old('cpf')}}">
                            <label>CPF</label>
                            @if($errors->has('cpf'))
                            <span class="red-text">
                                <text>{{$errors->first('cpf')}}</text>
                            </span>
                            @endif

                        </div>

                        <div class="input-field col s4 {{$errors->has('dataMatricula') ? 'has-error' : ''}}">
                            <input type="text" name="dataMatricula" class="datepicker" value="{{ isset($matricula->dataMatricula)&& !old('dataMatricula') ?  $matricula->dataMatricula : '' }}{{old('dataMatricula')}}">
                            <label>Data de Matricula</label>
                            @if($errors->has('dataMatricula'))
                            <span class="red-text">
                                <text>{{$errors->first('dataMatricula')}}</text>
                            </span>
                            @endif

                        </div>


                        <div class="input-field col s4 {{$errors->has('alunoBolsaFamlia') ? 'has-error' : ''}}">
                            <select name="alunoBolsaFamlia">
                                <option value="" disabled selected>Selecione uma opção </option>
                                <option value="Sim" {{ old( 'alunoBolsaFamlia', $matricula->alunoBolsaFamlia) == 'Sim' ?
                                    'selected' : '' }}>Sim</option>
                                <option value="Não" {{ old( 'alunoBolsaFamlia', $matricula->alunoBolsaFamlia) == 'Não' ?
                                    'selected' : '' }}>Não</option>

                            </select>
                            <label>Aluno é cadastrado no BolsaFamlia?</label>
                            @if($errors->has('alunoBolsaFamlia'))
                            <span class="red-text">
                                <text>{{$errors->first('alunoBolsaFamlia')}}</text>
                            </span>
                            @endif
                        </div>


                        <div class="row">
                        </div>
                        <div class="col s12">
                            <button class="btn orange darken-4 btn-info right">Atualizar Dados
                                <i class="material-icons left">edit</i>
                            </button>
                        </div>

                    </div>
                </form>



            </div>

        </div>
    </div>
</div>
@endsection