@extends('app')

@section('conteudo')
    <h1 class="text-center">Cadastrar Turma</h1><br>


    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="/turma" method="post">
                @csrf
                <div class="form-group">
                    <label for="disciplina">Disciplina</label>
                    <select class="form-control" name="disciplina_id" id="">
                        <option value="" selected disabled>Selecione um curso</option>
                        @foreach ($disciplinas as $disciplina)
                            <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="professor">Professor</label>
                    <select class="form-control" name="professor_id" id="">
                        <option value="" selected disabled>Selecione um professor</option>
                        @foreach ($professores as $professor)
                            <option value="{{$professor->id}}">{{$professor->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="col-sm-2">

        </div>
    </div>

@endsection