@extends('layouts.app') @section('content')
<div class="container">
    <h2 class="center">Lista de Cadastrado Pré-Matrícula</h2>

    @include('admin._caminho')


    <div class="row mb-0">
        <div class="col-sm-4 input-group">
            <form action="#" method="POST">
                {{ csrf_field()}}
                <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar Código Cadastrado Pré-Matricula">
                <div class="col-md-2">

                    <a title="Buscar os código pré-matricula"> <button type= "submit" class="btn btn-default" type="button">Buscar</button></a>

                </div>
            </form>


        </div>

    </div>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome da Mãe</th>
                    <th>Nome do Pai</th>
                    <th>Nome do Aluno</th>
                    <th>Senha</th>


                </tr>
            </thead>
            <tbody>
                @foreach($prematriculas as $prematricula)
                <tr>
                    <td> {{$prematricula->id}} </td>
                    <td> {{$prematricula->nomemae}} </td>
                    <td> {{$prematricula->nomepai}} </td>
                    <td> {{$prematricula->nomealuno}}  </td>
                    <td> {{$prematricula->senha}}  </td>

                
                </tr>


                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection