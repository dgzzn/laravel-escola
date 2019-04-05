@extends('app')

@section('conteudo')

<h1>Alunos</h1>

<a name="" id="" class="btn btn-danger" href="aluno/create" role="button">Criar</a>


<table class="table table-bordered table-dark table-hover">
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Matrícula</th>
        <th>Email</th>
        <th>Nome</th>

    </tr>

    @foreach($alunos as $aluno)

        <tr>
            <td>
                <a class="btn btn-primary" href="aluno/{{$aluno->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="aluno/{{$aluno->id}}/delete">Excluir</a>
            </td>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->matricula}}</td>
            <td>{{$aluno->email}}</td>
            <td>{{$aluno->nome}}</td>
        </tr>

    @endforeach
</table>



@endsection