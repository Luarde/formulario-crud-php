<?php
    require_once('projetodb.php');

    $conexao = conectar();

    if (isset($_POST['titulo']) && isset($_POST['conteudo']) && isset($_POST['calendario']) && isset($_POST['relogio'])){
        $tarefa = $_POST['titulo'];
        $anotacao = $_POST['conteudo'];
        $data = $_POST['calendario'];
        $hora = $_POST['relogio'];

        $sql = "INSERT INTO test (`titulo`, `conteudo`, `data`, `hora`) VALUES ('$tarefa', '$anotacao', '$data', '$hora')";

        $linhasInseridas = $conexao->query($sql);

        if ($linhasInseridas > 0){
            //echo("Tarefa salva!");
           header('location: index.php?pagina=home&msg=sucesso');
        }else{
            echo("Erro ao salvar a tarefa!");
        }
    }
    else{
        echo("Erro no preenchimento dos dados!");
    }

    $conexao->close();

?>
