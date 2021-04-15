<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Content-Type: application/json; charset=UTF-8');
$uri = basename($_SERVER['REQUEST_URI']);
require_once ('./../services/sessao.php');
require_once ('./../services/conexao.php');
include_once ('./../services/delete.php');
include_once ('./../services/atualizar.php');



if($_SERVER['REQUEST_METHOD'] == 'DELETE')
{

    if(is_numeric($uri))
    {
        echo json_encode(['mensagem'=> "Excluido com sucesso."]);
        deleteComentario($uri,$connection);
        http_response_code(202);
    }
    else
    {
        echo json_encode(['mensagem'=> 'Este comentário não pode ser excluido!']);
        http_response_code(406);
    }
}


if($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    parse_str(file_get_contents('php://input'), $_PUT);

    $comentario = (isset($_PUT['comentario'])) ? $_PUT['comentario'] : '';
    $id = (isset($_PUT['id'])) ? $_PUT['id'] : '';

    
    if(empty($comentario) || empty($id))
    {
        echo json_encode(['mensagem'=> 'Infome seu Código  !']);
        http_response_code(406);
    }
    else
    {
        editarComentario($comentario,$id,$connection);
        echo json_encode(['mensagem'=> "Atualizado com sucesso."]);
        http_response_code(202);
    }
}

