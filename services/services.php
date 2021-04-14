<?php 
require_once ('./sessao.php');
require_once ('./conexao.php');
require_once ('./inserir.php');
require_once ('./delete.php');
require_once ('./logar.php');


$usuario = [];
$usuario[0] = $_POST['senha'] ?? '';
$usuario[1] = $_POST['nome'] ?? '';
$usuario[2] = $_FILES['imagem'] ?? 1;
$usuario[3] = $_POST['comentario'] ?? '';
$error ='';

if(isset($_POST['inserirUsuario'])){


    // Senha --- nome ---- ima
    if($usuario[0] == '' || $usuario[1] == '' || $usuario[2] == ''){

        $error = "Prencher todos as campos:(";
        header('location: http://localhost/paginas/error.php');

    }else{
        $anexo = $usuario[2];
        $senhaSegura = password_hash($usuario[0],PASSWORD_DEFAULT,['cost'=>12]);
        $nameImagen =md5($anexo['name']. rand(0,9999));
        $tipo = substr($anexo['name'], -4);
        $cliente[2] = "{$nameImagen}{$tipo}";
        $imagem = $anexo['tmp_name'];
        var_dump($imagem);
        move_uploaded_file($imagem,"./../public/{$cliente[2]}");
        $cliente[0] = $senhaSegura;
        $cliente[1] = $usuario[1];
        $nome ='';
        $anexo = [];
        $usuario[2]='';
        $usuario[3]='';
        inserirUsuario($cliente, $connection);
        logar($connection,$usuario[0],$usuario[1]);
        $usuario[0]='';
        $usuario[1]='';
        $error = '';
    }
}

if(isset($_POST['inserirComentario'])){

    if($logado){

        $usuario[1] = $_SESSION['usuario'];
        $usuario[2] = $_SESSION['imagem'];

    }else{

        $usuario[1] = 'Anonimo!!!';
        $usuario[2] = 'imagenAnonima.jpg';
    }
    var_dump($usuario[1].'1');
    var_dump($usuario[2]).'2';
    var_dump($usuario[3]).'3';

    if($usuario[3] == '' || $usuario[1] == '' || $usuario[2] == ''){

        $error = "Algo deu errado tente refazer:(";
        header('location: http://localhost/paginas/error.php');


    }else{

        var_dump("else");

        $cliente[1] = $usuario[1];
        $cliente[2] = $usuario[2];
        $cliente[3] = $usuario[3];
        $cliente[0] = '';
        $usuario[1] = '';
        $usuario[2] = '';
        $usuario[3] = '';
        $anexo = [];
        $error = '';
        inserirComentario($cliente, $connection);
    }
}

if(isset($_POST['logar'])){

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($usuario == '' || $senha == ''){

        $error = "Preencher todos os campos:(";
        header('location: http://localhost/paginas/error.php');
        
    }else{
        $error = '';
        logar($connection,$senha,$usuario);
    }
    
}

if(isset($_POST['sair'])){
    
    header('location: http://localhost/paginas/sair.php');

}

