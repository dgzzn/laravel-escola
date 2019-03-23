@extends('app')

@section('conteudo')

<h1>Cursos</h1>

<a name="" id="" class="btn btn-danger" href="curso/create" role="button">Criar</a>

<table>
    <tr>
        <th>Ações</th>
        <th>ID</th>
        <th>Nome</th>
    </tr>

    @foreach($cursos as $curso)

        <tr>
            <td>-</td>
            <td>{{$curso->id}}</td>
            <td>{{$curso->nome}}</td>

        </tr>

    @endforeach
</table>



@endsection