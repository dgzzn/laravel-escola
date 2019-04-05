@extends('app')

@section('conteudo')

<h1>Turmas</h1>

<a name="" id="" class="btn btn-danger" href="{{route('turma.create')}}" role="button">Criar</a>


<table class="table table-bordered table-dark table-hover">
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Nome</th>
    </tr>

    @foreach($turmas as $turma)

        <tr>
            <td>
                <a class="btn btn-primary" href="turma/{{$turma->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="turma/{{$turma->id}}/delete">Excluir</a>
            </td>
            <td>{{$turma->disciplina->nome}}</td>
            <td>{{$turma->professor->nome}}</td>

        </tr>

    @endforeach
</table>



@endsection