@extends('app')

@section('conteudo')

<h1>Cursos</h1>

<a name="" id="" class="btn btn-danger" href="curso/create" role="button">Criar</a>


<table class="table table-bordered table-dark table-hover">
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Nome</th>
    </tr>

    @foreach($cursos as $curso)

        <tr>
            <td>
                <a class="btn btn-primary" href="curso/{{$curso->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="curso/{{$curso->id}}/destroy">Excluir</a>
            </td>
            <td>{{$curso->id}}</td>
            <td>{{$curso->nome}}</td>

        </tr>

    @endforeach
</table>



@endsection