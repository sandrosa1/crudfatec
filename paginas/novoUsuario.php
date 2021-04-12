<?php
require_once ('./../services/sessao.php');
require_once ('./../services/conexao.php');
require_once ('./../html/header.php');
require_once ('./../html/menu.php');
?>
<div class="content">

  <!--FORMULÁRIO DE CADASTRO-->
  <div id="cadastro">
    <form method="post" action="http://localhost/services/services.php" enctype="multipart/form-data" name="cadastro">
      <h1>Cadastro</h1>

      <p>
        <label for="nome_cad">Seu nome</label>
        <input id="nome_cad" name="nome" required="required" type="text" placeholder="nome" />
      </p>

      <p>
        <label for="email_cad">Sua imagem</label>
        <input type="file" name="imagem" accept='image/*'/>
        <!-- <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com" /> -->
      </p>

      <p>
        <label for="senha_cad">Sua senha</label>
        <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234" />
      </p>

      <p>
        <input type="submit" value="Cadastrar" name="inserirUsuario" />
      </p>
    </form>
  </div>
</div>

<?php require_once ('./../html/footer.php'); ?>