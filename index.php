<!doctype html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Projeto | Block de Notas</title>
  </head>

  <body class="container">

    <h1>Lista de Tarefas</h1> <br>

    <nav class="navbar navbar-expand navbar-dark bg-light" style="background-color: #9c4646!important;">
        <a class="navbar-brand" href="?pagina=home">Notas </a>
        <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?pagina=form">Adicionar <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?pagina=infos">infos </a>
            </li>
        </ul>
        </div>
    </nav>

    <div id="conteudo">
    <?php
        
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

        switch ($pagina) {

            case 'home':
                echo("<h2 style='color: green;'>Um jeito rápido e fácil de organizar suas tarefas do cotidiano.</h2>");
                include('lista.php');
                break;
            
            case 'form':
                include('projetoform.php');
                
                break;
        
            case 'infos':
                echo("<h4>dados e informações</h4>");
                        
                break;
        }

    ?>
    
    </div>
    
  </body>

</html>
