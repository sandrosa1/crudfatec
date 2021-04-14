<?php 
require_once ('./sessao.php');

function logar($connection, $senha, $usuario){

  $query='SELECT * FROM usuarios';
  $result = $connection->prepare($query);
  $result->execute();
  $users = $result->fetchAll(PDO::FETCH_ASSOC);
  $contador = 0;
  foreach( $users as $user){
      if( password_verify("{$senha}","{$user['senha']}") && $usuario == $user['nome']){
        $contador ++;
        $_SESSION['usuario'] = $user['nome'];
        $_SESSION['senha'] = $user['senha'];
        $_SESSION['imagem'] = $user['imagem'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['session_id'] = session_id();
        header('Location: http://localhost/index.php');
      }
    }if($contador == 0){
    
      session_unset();
      session_destroy();
      header('Location: http://localhost/paginas/error.php');
  
  }

}


