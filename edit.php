<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title">Editar Contato </h1>
    <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?=$contact["id"]?>">
      <div class="form-group">
        <label for="nome">Nome do contato:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value=<?=$contact["nome"]?>>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value=<?=$contact["phone"]?>>
      </div>
      <div class="form-group">
        <label for="observacao">Observações:</label>
        <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Insira as observações" rows="3" ><?=$contact["observacao"]?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>














<?php

include_once("templates/footer.php")

?>