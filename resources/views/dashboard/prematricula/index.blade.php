@extends('layouts.app') @section('content')

<div class="container">
    <div class="row"></div>
    <div class="row">
        <h4 class="center">Pré-Inscrição</h4>
    </div>

    <div class="row">
        <form class="form-horizontal" id="regForm" action="{{route('prematricula.store')}}" method="post">
            <div class="row">
                
                <div class="input-field col s8">
                    <input type="text" name = "nomecompleto" class="validate">
                    <label >Nome Completo</label>
                                          
                </div>

                <div class="input-field col s8">
                    <input type="text" name = "nomefilho" class="validate">
                    <label >Nome do Filho(a)</label>
                                          
                </div>
                
                <div class="input-field col s8">
                    <input type="text" name = "contato" class="validate">
                    <label >Telefone</label>
                                          
                </div>
                
                
                
            </div>
            <div class="col s12">
                <button class="btn green btn-info right">Confirmar</button>
            </div>

        </form>

        
    </div>
</div>

@endsection