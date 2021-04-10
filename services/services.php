<?php
include_once __DIR__ . './../services/sessao.php';
include_once __DIR__ . './../conexao/conexao.php';
include_once __DIR__ . './../services/banco.php';


$nome = $_POST['nome'] ?? '';
$imagem = $_FILES['imagem'] ?? 1;
$senha = $_POST['senha'] ?? '';
$comentario = $_POST['comentario'] ??'';





$dadosUsuario[0] ="João";
$dadosUsuario[1] ="imagem2.jpg";
$dadosUsuario[2] ="123456";
//inserirUsuario(TBUSUARIOS,$dadosUsuario);
//$id = "2";
//excluirDados(TBUSUARIOS, $id);

//$id ="1";
//$update = "Um novo comentario.";
//editarComentario(TBCOMENTARIOS, $update, $id);

//var_dump(lerDados(TBCOMENTARIOS));

