<?php

function lerDados($tabela){

    $connection = connection();
    $query="SELECT * FROM {$tabela}";
    $result = $connection->prepare($query);
    $result->execute();
    
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        $connection = NULL;
        return $dados;

}

function excluirDados($tabela, $id){

    $connection = connection();
    $query = "DELETE FROM {$tabela} WHERE id = :id ";
    $result = $connection->prepare($query);
    $result->bindValue(':id',$id);
    $result->execute();
    $connection = NULL;

}

function editarComentario( $tabela, $update, $id){
  
    $connection = connection();
    $query = "UPDATE {$tabela} SET comentario = '{$update}' WHERE id = :id ";
    $result = $connection->prepare($query);
    $result->bindValue(':id', $id);
    $result->execute();
    $connection = NULL;
}
  
function inserirUsuario($tabela,$dadosUsuario){

    $connection = connection();
    if($tabela == "usuarios"){
        $dadosUsuario[2] = password_hash($dadosUsuario[2],PASSWORD_DEFAULT,['cost'=>12]);
        $query ="INSERT INTO {$tabela} (nome, imagem, senha)
        VALUES (:p1, :p2, :p3)"; 

    }else{

        $query ="INSERT INTO {$tabela} (nome, imagem, comentario, )
        VALUES (:p1, :p2, :p3)";
    }
 
    $result = $connection->prepare($query);
    $result->bindValue(':p1', $dadosUsuario[0]);
    $result->bindValue(':p2',$dadosUsuario[1]);
    $result->bindValue(':p3',$dadosUsuario[2]);
    $result->execute();
    $connection = null;
}


function logar($senha, $usuario){


    $gestor = lerDados(TBUSUARIOS);
    $senha_db = $gestor[0]['id'];
    $usuario_db = $gestor[0]['nome'];
  
    if( password_verify("{$senha}","{$senha_db}") && $usuario == $usuario_db){
  
        $_SESSION['usuario'] = $usuario_db;
        $_SESSION['senha'] = $senha_db;
        $_SESSION['session_id'] = session_id();
  
    }else{

        session_unset();
        session_destroy();
    
    }
  
}


function sair(){
    session_start();
    session_unset();
    session_destroy(); 
}