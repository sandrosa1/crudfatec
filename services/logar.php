<?php 
require_once ('./sessao.php');

function logar($connection,$senha, $usuario){

  $query='SELECT * FROM usuarios';
  $result = $connection->prepare($query);
  $result->execute();
  $user = $result->fetchAll(PDO::FETCH_ASSOC);
  $senha_db = $user[0]['id'];
  $usuario_db = $user[0]['nome'];

if( password_verify("{$senha}","{$senha_db}") && $usuario == $usuario_db){

    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['session_id'] = session_id();
    header('Location: http://localhost/index.php');

  }else{
    session_unset();
    session_destroy();
    header('Location: http://localhost/paginas/login.php');

  }

}


