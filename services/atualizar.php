<?php


function editarComentario($comentario, $id ,$connection){
  
  $query = "UPDATE comentarios SET comentario = '{$comentario}' WHERE id = :id ";
  $result = $connection->prepare($query);
  $result->bindValue(':id', $id);
  $result->execute();
  $connection = NULL;

}