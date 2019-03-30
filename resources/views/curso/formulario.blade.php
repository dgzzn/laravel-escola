@extends('app')

@section('conteudo')
    <h1 class="text-center">Cadastrar curso</h1><br>


    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="/curso" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome"><b>Curso</b></label>
                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="duracao"><b>Duração</b></label>
                    <input type="number" class="form-control" name="duracao" id="duracao" aria-describedby="helpId" placeholder="">
                    <small class="text-muted">*Duração em anos</small>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="col-sm-2">

        </div>
    </div>

@endsection