<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Template Padrão</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-auto mr-lg-0" href="#">Web II</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('curso.index')}}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('disciplina.index')}}">Disciplinas</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="{{route('aluno.index')}}">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('professor.index')}}">Professores</a>
                </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{route('turma.index')}}">Turmas</a>
                     </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('turma_aluno.index')}}">Alunos e turmas</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main role="main" class="container" style="margin-top: 60px;">
        @yield('conteudo')
    </main>
</body>
</html>
