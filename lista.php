<!-- conexão com o banco -->
<?php

  require_once('projetodb.php');

  $conexao = conectar();

  $sql = 'SELECT * FROM test';
  $table = $conexao->query($sql);
?>

<!-- criando a tabela para aparecer na pagina -->
<table class="table table-bordered">
  <tr class="thead-dark">
    <th>ID</th>
    <th>Título</th>
    <th>Anotações</th>
    <th>Data</th>
    <th>Hora</th>
  </tr>

<?php
  if($table->num_rows > 0){
    if(isset($_GET['msg']) && $_GET['msg'] == 'sucesso'){
      echo("<div class='alert alert-success' role='alert'>Tarefa salva com sucesso!</div>");
    }

    while($linha = $table->fetch_assoc()){
      echo('<tr><td>' . $linha['id'].'</td> <td>'.$linha['titulo'].'</td> <td>'.$linha['conteudo'].'</td> <td>'.$linha['data'].'</td> <td>'.$linha['hora'].'</td></tr>');
    }
  }
  $conexao->close();

?>
</table>