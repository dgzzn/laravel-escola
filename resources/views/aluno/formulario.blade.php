@extends('app')

@section('conteudo')

    <h1 class="text-center">Cadastrar Aluno</h1><br>


    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="/aluno" method="post">
                @csrf

                <input type="hidden" name="id" value="{{$aluno->id}}">
                <div class="form-group">
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" class="form-control" value="{{$aluno->nome}}" name="nome" id="nome" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="duracao"><b>Matrícula</b></label>
                    <input type="number" class="form-control" value="{{$aluno->matricula}}" name="matricula" id="matricula" aria-describedby="helpId" placeholder="">
                    <small class="text-muted">*ideal que seja automático (última matricula+1)</small>
                </div>
                <div class="form-group">
                    <label for="nome"><b>Telefone</b></label>
                    <input type="text" class="form-control" value="{{$aluno->telefone}}" name="telefone" id="telefone" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nome"><b>Email</b></label>
                    <input type="text" class="form-control" value="{{$aluno->email}}" name="email" id="email" aria-describedby="helpId" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="col-sm-2">

        </div>
    </div>
@endsection