@extends('layouts.app') @section('content')
<div class="container">
    <h5 class="center">Lista de Cadastrado Pré-Matrícula</h5>

    @include('admin._caminho')


    <div class="row mb-0">
        <div class="col-sm-4 input-group">
            <form action="{{route('relatorio.prematricula.buscar')}}" method="POST">
                {{ csrf_field()}}
                <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar Nome do Aluno Cadastrado na Pré-Matricula">
                <div class="col-md-2">

                    <a title="Buscar os código pré-matricula" button type= "submit" class="btn btn-default" type="button">Buscar</button></a>

                </div>
            </form>


        </div>

    </div>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome do Aluno</th>
                    <th>Nome da Mãe</th>
                    <th>Nome do Pai</th>
                    <th>Senha</th>
					<th>Ação</th>


                </tr>
            </thead>
            <tbody>
                @forelse($prematriculas as $prematricula)
                <tr>
                    <td> {{$prematricula->id}} </td>
                    <td> {{$prematricula->nomealuno}} </td>
                    <td> {{$prematricula->nomemae}} </td>
                    <td> {{$prematricula->nomepai}} </td>
                    <td> {{$prematricula->senha}}  </td>

					 
					<td>
						<a title="Deletar Pré-Matricula" href="{{route('relatorio.prematricula.destroy', $prematricula->id)}}" class="btn red">
							<i class="material-icons">delete</i>
                        </a>
                        <a title="Status" href="#" class="btn orange">
							<i class="material-icons">lock_open</i>
						</a>
                    </td>
                </tr>
                @empty
					
					<td> Não Existe Pré-Matrícula Cadastrada </td>
				@endforelse
            </tbody>
        </table>

    </div>

</div>

@endsection