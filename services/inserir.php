<?php

function inserirUsuario($cliente, $connection){
      var_dump($cliente);
     $query ='INSERT INTO usuarios (id, nome, imagem)
     VALUES (:id, :nome, :imagem)'; //parametros nomeados ou sqlInject(?,?,?,?)

      $result = $connection->prepare($query);
      //para utiliza parametros passando por variaval
      //$result->bindParam(':nome',$nome,':email',$email);
      $result->bindValue(':id', $cliente[0]);
      $result->bindValue(':nome',$cliente[1]);
      $result->bindValue(':imagem',$cliente[2]);
      $result->execute();
      $connection = null;
      header('location: http://localhost/index.php');
 }

 
//  function inserirComentario($cliente, $connection){

//     $query ='INSERT INTO comentario (nome, imagem, comentario)
//     VALUES (:nome, :imagem, :comentario)'; 

//      $result = $connection->prepare($query);
//      //para utiliza parametros passando por variaval
//      //$result->bindParam(':nome',$nome,':email',$email);
//      $result->bindValue(':nome', $cliente[0]);
//      $result->bindValue(':imagem',$cliente[1]);
//      $result->bindValue(':comentario',$cliente[3]);
//        $result->execute();
//      $connection = null;
//      header('location: http://localhost/paginas/cadastrar.php');
// }



    

 
