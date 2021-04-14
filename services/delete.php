<?php
require_once ('./../services/sair.php');


 function deleteUsuario($id,$connection){
    
  $query = "DELETE FROM usuarios WHERE id = :id";
  $result = $connection->prepare($query);
  $result->bindValue(':id',$id);
  $result->execute();
  $connection = null;
  sair();
  
 }


 function deleteComentario($id,$connection){
    $query = "DELETE FROM comentarios WHERE id = :id";
    $result = $connection->prepare($query);
    $result->bindValue(':id',$id);
    $result->execute();
    $connection = null;
    
   }