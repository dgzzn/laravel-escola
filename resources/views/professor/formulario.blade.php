@extends('app')

@section('conteudo')

    <h1 class="text-center">Cadastrar Professor</h1><br>


    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="/professor" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$professor->id}}">
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" class="form-control" value="{{$professor->nome}}" name="nome" id="nome" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="duracao"><b>Matrícula</b></label>
                    <input type="number" class="form-control" value="{{$professor->matricula}}" name="matricula" id="matricula" aria-describedby="helpId" placeholder="">
                    <small class="text-muted">*ideal que seja automático (última matricula+1)</small>
                </div>
                <div class="form-group">
                    <label for="nome"><b>Telefone</b></label>
                    <input type="text" class="form-control" value="{{$professor->telefone}}" name="telefone" id="telefone" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nome"><b>CPF</b></label>
                    <input type="text" class="form-control" value="{{$professor->cpf}}" name="cpf" id="cpf" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nome"><b>Email</b></label>
                    <input type="text" class="form-control" value="{{$professor->email}}" name="email" id="email" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nome"><b>CEP</b></label>
                    <input type="text" class="form-control" value="{{$professor->cep}}" name="cep" id="cep" aria-describedby="helpId" placeholder="">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nome"><b>Logradouro</b></label>
                            <input type="text" class="form-control" value="{{$professor->logradouro}}" name="logradouro" id="logradouro" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nome"><b>Bairro</b></label>
                            <input type="text" class="form-control" value="{{$professor->bairro}}" name="bairro" id="bairro" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nome"><b>Município</b></label>
                            <input type="text" class="form-control" value="{{$professor->municipio}}" name="municipio" id="municipio" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="uf">Estado</label>
                            <select class="form-control" name="uf" id="uf">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="col-sm-2">

        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            $("#cep").change(function(){
                $.ajax({
                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/',
                    dataType: 'json',
                    success: function(dados){
                        $("#bairro").val(dados.bairro);
                        $("#logradouro").val(dados.logradouro);
                        $("#municipio").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#complemento").focus();
                    }
                })
            });
        });

    </script>
@endsection