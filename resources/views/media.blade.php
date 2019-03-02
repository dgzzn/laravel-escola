<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>

</body>
</html>
<head>
    <title>Média</title>
</head>
    <body>
    <div class="container-fluid">
        <h1>Médias</h1><br>
        <form action="/calcular-media" method="POST">
            @csrf
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text"
                           class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="Nome">Nota 1</label>
                    <input type="text"
                           class="form-control" name="nota1" id="nota1" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="Nome">Nota 2</label>
                    <input type="text"
                           class="form-control" name="nota2" id="nota2" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="Nome">Nota 3</label>
                    <input type="text"
                           class="form-control" name="nota3" id="nota3" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="Nome">Nota 4</label>
                    <input type="text"
                           class="form-control" name="nota4" id="nota4" aria-describedby="helpId" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </body>
</html>