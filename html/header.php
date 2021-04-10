<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL;?>/css/stylus.css" type="text/css">
    <title>Fatec</title>
</head>
<body>
<div class="container-flex">
<nav class="navbar navbar-expand-lg navColor">
    <a class="navbar-brand" href="<?php echo URL; ?>home">Fatec</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL; ?>cadastrar">Cadastrar<span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL; ?>categorias/tecnologia">Tecnologia<span class="sr-only">(página atual)</span></a>
        </li>
    <?php 

        if($logado){

            echo
            "<li class='nav-item'><a class='nav-link' href='<?php echo URL; ?>usuarios'>Usuários</a></li>
            </ul>;
            <h2 id='h2Nav'>Olá {$_SESSION['usuario']} </h2><br>";
                    
        }else{
            echo "</ul>";

        }

    ?>
       

      <form class="form-inline" action="<?php echo URL ?>services/services.php" method="post">
        <div class="form-group mb-2">
          <label for="inputPassword2" class="sr-only">Login</label>
          <input type="text" class="form-control logarIndex" id="inputName" name="usuario" placeholder="Login">
        </div>
        <div class="form-group mb-2">
          <label for="inputPassword2" class="sr-only">Senha</label>
          <input type="password" class="form-control logarIndex" id="inputPassword2" name="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary mb-2 logarIndex btnLogar" name="logar" >Logar</button>
        <button type="link" class="btn btn-primary mb-2 logarIndex btnSair" name="sair">Sair</button>
      </form>

    </div>
  </nav>