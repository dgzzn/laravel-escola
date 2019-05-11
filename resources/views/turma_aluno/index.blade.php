@extends('app')

@section('conteudo')

<h1>Turmas e Alunos</h1>

<a name="" id="" class="btn btn-danger" href="turma_alunos/create" role="button">Criar</a>


<table class="table table-bordered table-dark table-hover">
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Turma</th>
        <th>Aluno</th>


    </tr>

    @foreach($turma_alunos as $turma_aluno)

        <tr>
            <td>
                <a class="btn btn-primary" href="turma_alunos/{{$turma_aluno->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="turma_alunos/{{$turma_aluno->id}}/destroy">Excluir</a>
            </td>
            <td>{{$turma_aluno->id}}</td>
            <td>{{$turma_aluno->turma->id}}</td>
            <td>{{$turma_aluno->aluno->nome}}</td>
        </tr>

    @endforeach
</table>



@endsection