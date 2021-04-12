<?php


function lerUsuarios($connection){

    $query='SELECT * FROM usuarios';
    $result = $connection->prepare($query);
    $result->execute();
    
    $users = $result->fetchAll(PDO::FETCH_ASSOC);
    $tabela = '';
    foreach($users as $user)
    {
        $tabela .= "<tr><th scope='row' class='tabela'>{$user['nome']}</th><td>{$user['imagem']}</td><td> <button type='butto' class='btn btn-danger ' name='#'>Excluir</button></td>";
    }

    return $tabela;

}



/* close connection */

// ---Imprime

function lerComentario($connection){

    $query='SELECT * FROM comentarios';
    $result = $connection->prepare($query);
    $result->execute();

    $users = $result->fetchAll(PDO::FETCH_ASSOC);
    $card = '';
    foreach($users as $user){
        $card .= "<div class='col-12 caixaDeMensagem'>
        <div class='row no-gutters'>
        <div class='col-sm-2 divCardIm'>
        <img class='cardImg' src='/public/{$user['imagem']}' alt='Suresh Dasari Car'>
        </div>
        <div class='col-sm-10'>
        <div class='card-body bodyCardComentario'>
        <h5 class='card-title'>{$user['nome']}</h5>
        <p class='card-text'>{$user['comentario']}</p>
        <a href='#' class='btn btn-danger btnComentario' name='{$user['id']}'>Excluir</a>
        </div>
        </div>
        </div>
        </div>";
    }
    return $card;

}


