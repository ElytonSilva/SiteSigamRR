@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                <h4 class="center">Formulário de Pré-Matricula</h4>
                <div class="row"></div>
                <div class="row">
                    <form class="form-horizontal" id="regForm" action="#" method="post">
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nome do Responsavel</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">face</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nome do Filho</label>
                            </div>


                            <div class="input-field col s6">
                                <i class="material-icons prefix">contact_phone</i>
                                <input id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">Telefone do Responsável</label>
                            </div>

                            <div class="input-field col s6">
                                    <i class="material-icons prefix">assignment_ind</i>
                                    <input id="icon_telephone" type="text" class="validate">
                                    <label for="icon_telephone">N° CPF do Responsável</label>
                                </div>

                            <div class="input-field col s4">
                                <label>Senha Gerada: </label>
                                <input type="text" id = "textsenha" name="contato" class="validate">

                                <button type="submit" id = "gerarsenha" class="waves-effect waves-light btn">
                                    <i class="material-icons left">vpn_key</i>Gerar</a>
                                </button>
                            </div>


                            <div class="row">
                            </div>
                            <div class="col s12">
                                <button class="btn orange darken-4 btn-info right">Salvar
                                    <i class="material-icons left">save</i>
                                </button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection