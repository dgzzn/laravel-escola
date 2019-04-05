@extends('app')

@section('conteudo')

<h1>Disciplinas</h1>

<a name="" id="" class="btn btn-danger" href="disciplina/create" role="button">Criar</a>


<table class="table table-bordered table-dark table-hover">
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Nome</th>
        <th>Curso</th>
    </tr>

    @foreach($disciplinas as $disciplina)

        <tr>
            <td>
                <a class="btn btn-primary" href="disciplina/{{$disciplina->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="disciplina/{{$disciplina->id}}/delete">Excluir</a>
            </td>
            <td>{{$disciplina->id}}</td>
            <td>{{$disciplina->nome}}</td>
            <td>{{$disciplina->curso->nome}}</td>

        </tr>

    @endforeach
</table>



@endsection