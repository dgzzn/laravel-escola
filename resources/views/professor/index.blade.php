@extends('app')

@section('conteudo')

<h1>Professores</h1>

<a name="" id="" class="btn btn-danger" href="professor/create" role="button">Criar</a>


<table class="table table-bordered table-dark table-hover">
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Matrícula</th>
        <th>Email</th>
        <th>Nome</th>

    </tr>

    @foreach($professores as $professor)

        <tr>
            <td>
                <a class="btn btn-primary" href="professor/{{$professor->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="professor/{{$professor->id}}/delete">Excluir</a>
            </td>
            <td>{{$professor->id}}</td>
            <td>{{$professor->matricula}}</td>
            <td>{{$professor->email}}</td>
            <td>{{$professor->nome}}</td>
        </tr>

    @endforeach
</table>



@endsection