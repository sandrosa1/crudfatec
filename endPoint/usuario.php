<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Content-Type: application/json; charset=UTF-8');
$uri = basename($_SERVER['REQUEST_URI']);
require_once ('./../services/sessao.php');
require_once ('./../services/conexao.php');
include_once ('./../services/delete.php');



if($_SERVER['REQUEST_METHOD'] == 'DELETE')
{

    if(is_numeric($uri))
    {
        echo json_encode(['mensagem'=> "Você informou seu Código $uri"]);
        deleteUsuario($uri,$connection);
        http_response_code(202);
    }
    else
    {
        echo json_encode(['mensagem'=> 'Você não pode excluir outro usuário!']);
        http_response_code(406);
    }
}
