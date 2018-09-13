@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
    </div>
    <div class="row">
        <center>
            <h4>Dados do Aluno: {{$matricula->nomealuno}}</h4>
        </center>
        <div class="col s12">
            <div class="card-panel white">
                <form class="form-horizontal" id="regForm" action="#" method="POST">
                    {{ csrf_field()}}
                    <div class="row">
                        <center>
                            <b><u><p class='col s12'>Dados Pessoais</p></b>
                        </center>


                        <div class="row"></div>
                        <div class="col s12">

                            <div class="input-field col s4 ">
                                <b>Nome Completo:</b>
                                <strong>{{$matricula->nomealuno}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Sexo:</b>
                                <strong>{{$matricula->sexo}}</strong>
                                <br>

                            </div>
                            
                            <div class="input-field col s4 ">
                                <b>Serie/Ano:</b>
                                <strong>{{$matricula->serieano}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Data de Nascimento:</b>
                                <strong>{{$matricula->datanascimento}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Naturalidade:</b>
                                <strong>{{$matricula->naturalidade}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>UF:</b>
                                <strong>{{$matricula->uf}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Quantidade de Irmãos:</b>
                                <strong>{{$matricula->quantdirmao}}</strong>
                                <br>

                            </div>
                            
                            <div class="input-field col s4 ">
                                <b>Cor:</b>
                                <strong>{{$matricula->cor}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Endereço:</b>
                                <strong>{{$matricula->endereço}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>N°:</b>
                                <strong>{{$matricula->numero}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>CEP:</b>
                                <strong>{{$matricula->cep}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Bairro:</b>
                                <strong>{{$matricula->bairro}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Nome do pai:</b>
                                <strong>{{$matricula->nomedopai}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Contato do Pai:</b>
                                <strong>{{$matricula->contatodopai}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Nome da Mãe:</b>
                                <strong>{{$matricula->nomedamae}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Contato da Mãe:</b>
                                <strong>{{$matricula->contatodamae}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>N° do RG:</b>
                                <strong>{{$matricula->numRG}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Orgão Expedidor:</b>
                                <strong>{{$matricula->orgaoexpedidor}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Data de Expedição:</b>
                                <strong>{{$matricula->dataexpedicao}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>CPF:</b>
                                <strong>{{str_limit($matricula->cpf, $limit = 3, $end = '.***-**')}}</strong>
                                <br>

                            </div>

                            <div class="input-field col s4 ">
                                <b>Data da Matricula:</b>
                                <strong>{{$matricula->dataMatricula}}</strong>
                                <br>

                            </div>

                            <div class = "row"></div>
                            <div class="input-field col s4 ">
                                <b>Aluno é Castrado no Bolsa Família?:</b>
                                <strong>{{$matricula->alunoBolsaFamlia}}</strong>
                                <br>

                            </div>


                        </div>
                        <div class = "row"></div>
                        <div class = "row"></div>

                    
                     
                        <a title="Voltar para lista de Matriculados" class="btn green btn-info right " href="{{route('matricula.lista')}}">Voltar
                            <i class="material-icons left">keyboard_backspace</i>
                        </a>
                    </div>    
                </form>
                    
            </div> 
        </div>
    </div>
</div>    
@endsection