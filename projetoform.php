<!--Formulário de cadastro-->

<form method="POST" action="salvar.php">
  <div class="form-group">
    <h5>Escreva um título para Anotação</h5> 
    <tr>
   <td><input class="form-control col-sm-4" id="titulo" type="text" name="titulo"  placeholder="Seu texto" require autofocus ></td></tr>
  </div>
  <div class="form-group">
    <h5>Digite suas Anotações</h5>
    <textarea class="form-control" id="Texto" rows="7" name="conteudo" placeholder="Digite sua mensagem aqui."></textarea>
  </div>
  <div>
    <h5>Data e Hora para realizar a tarefa:</h5>
    <input type="date" id="data" name="calendario">
    <input type="time" id="hora" name="relogio"> <br><br>
  </div>

  <input class="btn btn-primary" method = "POST" action="./salvar.php" type="submit" value="Salvar"> 
</form>