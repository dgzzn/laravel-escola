@extends('app')

@section('conteudo')

    <h1 class="text-center">Cadastrar disciplina</h1><br>


    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="/disciplina" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$disciplina->id}}">
                <div class="form-group">
                    <label for="nome"><b>Disciplina</b></label>
                    {{--<input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="">--}}
                    <input type="text" class="form-control" value="{{$disciplina->nome}}" name="nome" id="nome" aria-describedby="helpId" placeholder="">
                </div>

                <select class="form-control" name="curso_id" id="curso">
                    <option value="" selected disabled>Selecione um curso</option>
                    @foreach ($cursos as $curso)
                        {{--<option value="{{$curso->id}}">{{$curso->nome}}</option>--}}
                        <option value="{{$curso->id}}" {{$curso->id == $disciplina->curso->id ? 'selected': ''}}>{{$curso->nome}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="col-sm-2">

        </div>
    </div>

@endsection