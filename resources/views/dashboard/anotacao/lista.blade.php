@extends('layouts.app') @section('content')
<div class="container">
    <h2 class="center">Lista de Anotações</h2>

    @include('admin._caminho')

    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Lembrete</th>
                    <th>Data Inicio</th>
                    <th>Hora Inicio</th>
                    <th>Hora Termino</th>
                    <th>Ação</th>


                </tr>
            </thead>
            <tbody>
                @foreach($anotacoes as $anotacao)
                <tr>
                    <td>{{$anotacao->id}}</td>
                    <td>{{$anotacao->lembrete}}</td>
                    <td>{{$anotacao->dataInicio}}</td>
                    <td>{{$anotacao->horaInicio}}</td>
                    <td>{{$anotacao->horaTermino}}</td>

                    <td>
                           
                        <a title="Editar Anotação" class="btn orange" href="{{ route('anotacao.edit',$anotacao->id) }}">
                            <i class="material-icons">mode_edit</i>
                        </a>
                
                        <a title="Deletar Anotação" href="{{route('anotacao.destroy', $anotacao->id)}}" class="btn red">
							<i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection
