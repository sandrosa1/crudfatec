  <nav class="navbar navbar-expand-lg navColor">
    <a class="navbar-brand" href="http://localhost/index.php">Fatec</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/paginas/novoUsuario.php">Cadastre-se<span class="sr-only">(página atual)</span></a>
        </li>
        
      <?php 

        if($logado){
            echo "<li class='nav-item'>
            <a class='nav-link' href='http://localhost/paginas/cadastrar.php'>Cadastro</a>
            </li>
            </ul>
            <h2 class='h2Nav' id='{$_SESSION['usuario']}'>Olá {$_SESSION['usuario']} </h2><br>
            ";
        }else{
          echo "</ul>";
        }

      ?>

      <form class="form-inline" action="http://localhost/services/services.php" method="post">
        <div class="form-group mb-2">
          <label for="inputPassword2" class="sr-only">Login</label>
          <input type="text" class="form-control logarIndex" id="inputName" name="usuario" placeholder="Login">
        </div>
        <div class="form-group mb-2">
          <label for="inputPassword2" class="sr-only">Senha</label>
          <input type="password" class="form-control logarIndex" id="inputPassword2" name="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary mb-2 logarIndex btnLogar" name="logar" >Logar</button>
        <button type="link" class="btn btn-primary mb-2 logarIndex btnSair" name="sair" >Sair</button>
      </form>

    </div>
  </nav>