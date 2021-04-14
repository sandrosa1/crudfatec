<?php
//require_once ('./services/sessao.php');

function lerUsuarios($connection){

    $query='SELECT * FROM usuarios';
    $result = $connection->prepare($query);
    $result->execute();
    
    $users = $result->fetchAll(PDO::FETCH_ASSOC);
    $tabela = '';
    foreach($users as $user)
    {
        $tabela .= "<tr><th scope='row' class='tabela align-middle'>{$user['nome']}</th>
        <td class='align-middle'><img class='cardImg' src='./../public/{$user['imagem']}' alt='Imagem do(a) {$user['nome']}'></td>
        <td class='align-middle'>
        <button id='{$user['id']}' type='buton' class='btn btn-danger'  value='{$_SESSION['id']}'  onclick='excluirUsuario(this)' >Excluir</button>
        </td>";
    }

    return $tabela;

}


function lerComentario($connection){

    $query='SELECT * FROM comentarios';
    $result = $connection->prepare($query);
    $result->execute();

    $users = $result->fetchAll(PDO::FETCH_ASSOC);
    $card = '';
    $valida = '';
    foreach($users as $user){
        $valida = 0;
        if($_SESSION['usuario'] == $user['nome']) $valida = 1;
        $card .= "<div class='col-12 caixaDeMensagem'>
        <div class='row no-gutters'>
        <div class='col-sm-2 divCardIm'>
        <img class='cardImg' src='./public/{$user['imagem']}' alt='Imagem do(a) {$user['nome']}'>
        </div>
        <div class='col-sm-10'>
        <div class='card-body bodyCardComentario'>
        <h5 class='card-title'>{$user['nome']}</h5>
        <p class='card-text'>{$user['comentario']}</p>
        <button id='{$user['id']}' type='buton' class='btn btn-danger btnComentario'  value='{$valida}'  onclick='excluirComentario(this)'>Excluir</button>
        </div>
        </div>
        </div>
        </div>";
    }
    return $card;

}