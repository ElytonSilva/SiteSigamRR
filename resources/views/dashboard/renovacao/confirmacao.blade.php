@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
    </div>
    <div class="row">
        <center>
            <h4>Solicitação de Renovação Concluída<br>

           
            </h4>
        </center>
        <div class="col s12">
            <div class="card-panel white">
                <form class="form-horizontal" action="#" method="POST">
                    {{ csrf_field()}}
                    <div class="row center">
                    

						<div class="col s12 m6">
						<div class="row"></div>
						<div class="row"></div>
						<div class="center ">
							<div>
								<div class="card-panel white ">
									<b class="black-text">AVISO IMPORTANTEEE? </b></br></br>

									<span>• Por favor Senhor(a) Responsável(a) Solicitamos que após solicitar renovação
										procure a secretaria da escola para confirmar a renovação e verificar se existe pendência de documentos do aluno</span></br></br>
									
								</div>
							</div>
						</div>
						<div class="row">
						</div>
						</div>

                        <div class="row"></div>
                        <div class="row"></div>


                        <a title="Voltar Para Página Principal" class="btn orange darken-4 btn-info left " href="/admin">Voltar
                            <i class="material-icons left">arrow_back_ios</i>
                        </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection