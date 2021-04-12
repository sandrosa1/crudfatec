<?php

 function delete($nome,$connection){
  $query = "DELETE FROM professores WHERE nome = :nome";
  $result = $connection->prepare($query);
  $result->bindValue(':nome',$nome);
  $result->execute();
  $connection = null;
  header('location: http://localhost/paginas/cadastrar.php');
 }
 /* close connection */

