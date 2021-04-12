<?php

function editar($id,$email, $connection){

  $query = "UPDATE professores SET email ='{$email}' WHERE id = :id ";
  $result = $connection->prepare($query);
  $result->bindValue(':id', $id);
  $result->execute();
  header('location: http://localhost/paginas/cadastrar.php');

}

/* close connection */
