<?php

function inserirUsuario($cliente, $connection){
  
  $query ='INSERT INTO usuarios (senha, nome, imagem)
  VALUES (:senha, :nome, :imagem)'; 

  $result = $connection->prepare($query);
  $result->bindValue(':senha', $cliente[0]);
  $result->bindValue(':nome',$cliente[1]);
  $result->bindValue(':imagem',$cliente[2]);
  $result->execute();
  $connection = null;
  header('location: http://localhost/index.php');
}

 
 function inserirComentario($cliente, $connection){

  $query ='INSERT INTO comentarios (nome, imagem, comentario)
  VALUES (:nome, :imagem, :comentario)'; 

  $result = $connection->prepare($query);
  $result->bindValue(':nome', $cliente[1]);
  $result->bindValue(':imagem',$cliente[2]);
  $result->bindValue(':comentario',$cliente[3]);
  $result->execute();
  $connection = null;
  header('location: http://localhost/index.php');

}



    

 
