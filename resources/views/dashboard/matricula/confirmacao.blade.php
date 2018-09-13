@extends('layouts.app') @section('content')
<div class="container">

    <div class="row">
    </div>
    <div class="row">
        
        <div class="col s12">
            <div class="card-panel white">
                <form class="form-horizontal" action="#">
                    <div class="row">
                        <center>
                            
                            <h4 class='col s12'>Cadastro Realizado com Sucesso!</h4>
                        </center>
                        <div class="col s12">
                        <div class="row"></div>
                        <div class="row"></div>
                        <a title="Voltar para página de matricula" class="btn orange darken-4 btn-info right " href="{{route('matricula.index')}}">Voltar
                            <i class="material-icons left">arrow_back_ios</i>
                    
                        </a>
                        

                        
                    </div>
                </form>
                
                
            </div>
            
        </div>

    </div>

</div>
@endsection