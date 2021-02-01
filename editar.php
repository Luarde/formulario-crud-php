<!-- conexão com o banco -->
<?php

  require_once('projetodb.php');

  $conexao = conectar();

  $sql = 'UPDATE test SET ';
  $table = $conexao->query($sql);
?>