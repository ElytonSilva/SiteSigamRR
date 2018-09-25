@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                <h4 class="center">Formulário de Pré-Matricula</h4>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row">
                    <form class="form-horizontal" id="regForm" action="#" method="post">
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nome da Mãe do Aluno</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nome do Pai do Aluno</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">face</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nome do Filho(a)</label>
                            </div>


                            <div class="input-field col s6">
                                <i class="material-icons prefix">contact_phone</i>
                                <input id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">Telefone da Mãe</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">contact_phone</i>
                                <input id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">Telefone do Pai</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">assignment_ind</i>
                                <input id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">N° CPF da Mãe</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">assignment_ind</i>
                                <input id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">N° CPF do Pai</label>
                            </div>

                            <div class="input-field col s4">
                                <i class="material-icons prefix">code</i>
                                <label>Senha Gerada: </label>
                                <input type="text" id="textsenha" name="contato" class="validate">

                                <button type="submit" id="gerarsenha" class="waves-effect waves-light btn">
                                    <i class="material-icons left">vpn_key</i>Gerar</a>
                                </button>
                            </div>

                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="input-field col s4">

                                <b>Documentos Obrigatórios: </b>

                                RG, CPF, Comprovante de Residência, Histórico Escolar.
                            </div>

                        </div>
                        <div class="row">
                        </div>
                        <div class="col s12">
                            <button class="btn orange darken-4 btn-info right">Salvar
                                <i class="material-icons left">save</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection