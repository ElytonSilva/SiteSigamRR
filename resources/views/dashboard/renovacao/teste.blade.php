@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
		
		<form class="form-horizontal " id="regForm" action="{{route('renovacao.store')}}" method="POST">
			<div class="card-panel white">
				<h4 class="center">Solicitar Renovação</h4>
				<div class="row"></div>
				{{ csrf_field()}}
				<right>
					<a>**Dados Cadastrados**</a>
				</right>
				<div class="row"></div>
				<div class="row"></div>
				<div class="row">
					@foreach($matricula as $matric)
					<div class="row">
						<div class="col s6 m6">
						<div class="input-field {{$errors->has('') ? 'has-error' : ''}} ">
							<label for="produto">Nome do Pai:</label>
							<input type="text" class="form-control" name="rematricula[{{ $loop->index}}][nomerespo]" value="{{ $matric->nomedopai }}">

						</div>
						</div>
						
						<div class="col s6 m6">
						<div class="input-field {{$errors->has('') ? 'has-error' : ''}} ">
							<label for="produto">Nome do Aluno(a):</label>
							<input type="text" class="form-control" name="rematricula[{{ $loop->index}}][nomealuno]" value="{{ $matric->nomealuno }}">

						</div>
						</div>


						

					</div>
					@endforeach
					
					
					<div class="col s12 m6">
						<div class="row"></div>
						<div class="row"></div>
						<div class="row">
							<div>
								<div class="card-panel white ">
									<b class="black-text">AVISO? </b></br></br>

									<span>• Por favor Senhor(a) Responsável(a) Solicitamos que após solicitar renovação
										procure a secretaria da escola para confirmar a renovação e verificar se existe pendência de documentos do aluno</span></br></br>
									
								</div>
							</div>
						</div>
						<div class="row">
						</div>
					</div>
					
					
					<div class = "row">
						<div class="col s12">
					 
							<a title="Voltar Para Página Principal" class="btn orange darken-4 btn-info left " href="/admin">Voltar
								<i class="material-icons left">arrow_back_ios</i>
							</a>
			
							<button type="submit" class="btn orange darken-4 btn-info right">Confirmar
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