@extends('layouts.app') @section('content')
<div class="container">
    <h2 class="center">Lista de Matriculados</h2>

    @include('admin._caminho')


    <div class="row mb-0">
        <div class="col-sm-4 input-group">
            <form action="{{route('matricula.buscar')}}" method="POST">
                {{ csrf_field()}}
                <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar Nome do Aluno">
                <div class="col-md-2">

                    <a title="Buscar os nome do Aluno"> <button type= "submit" class="btn btn-default" type="button">Buscar</button></a>

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
                    <th>Serie/Ano</th>
                    <th>Nome da Mãe</th>
                    <th>Nome do Pai</th>


                </tr>
            </thead>
            <tbody>
                @foreach($matriculas as $matricula)
                <tr>
                    <td> {{$matricula->id}} </td>
                    <td> {{$matricula->nomealuno}} </td>
                    <td> {{$matricula->serieano}} </td>
                    <td> {{$matricula->nomedamae}} </td>
                    <td> {{$matricula->nomedopai}} </td>

                    <td>
                        <form action="{{route('matricula.destroy',$matricula->id)}}" method="post">
                           
                            <a title="Editar Dados" class="btn orange" href="{{ route('matricula.edit',$matricula->id) }}">
                                <i class="material-icons">mode_edit</i>
                            </a>
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <button title="Deletar Matricula" class="btn red">
                                <i class="material-icons">delete</i>
                            </button>

                            <a title="Visualizar restante dos dados" class="btn green " href="{{route('matricula.vermais',$matricula->id)}}">Ver Mais
                                <i class="material-icons left">list_alt</i>
                            </a>
                        </form>
                    </td>
                </tr>


                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection