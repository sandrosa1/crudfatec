<?php 
require_once ('./sessao.php');
require_once ('./conexao.php');
require_once ('./inserir.php');
require_once ('./editar.php');
require_once ('./delete.php');
require_once ('./logar.php');

$usuario = [];
$usuario[0] = $_POST['senha'] ?? '';
$usuario[1] = $_POST['nome'] ?? '';
$usuario[2] = $_FILES['imagem'] ?? 1;
$usuario[3] = $_POST['comentario'] ?? '';

if(isset($_POST['inserirUsuario'])){

    var_dump("inserindo");
    // Senha --- nome ---- ima
    if($usuario[0] == '' || $usuario[1] == '' || $usuario[2] == ''){

        header('location: http://localhost/paginas/error.php');

    }else{
        $anexo = $usuario[2];
        $senhaSegura = password_hash($usuario[0],PASSWORD_DEFAULT,['cost'=>12]);
        $nameImagen =md5($anexo['name']. rand(0,9999));
        $tipo = substr($anexo['name'], -4);
        $cliente[2] = "{$nameImagen}{$tipo}";
        $imagem = $anexo['tmp_name'];
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
    }
}

if(isset($_POST['inserirComentario'])){

    if($logado){

        $cliente[2] = $imagemCliente;

    }else{

        $cliente[2] = 'imagenAnonima.jpg';
    }

    if($usuario[0] == '' || $usuario[1] == '' || $usuario[2] == ''){

        header('location: http://localhost/paginas/error.php');

    }else{

        $cliente[1] = $usuario[1];
        $cliente[0] = $usuario[3];
        $usuario[0] = '';
        $usuario[1] = '';
        $usuario[2] = '';
        $usuario[3] = '';
        $anexo = [];
        //inserirComentario($cliente, $connection);
    }
}




if(isset($_POST['editar'])){
    $id = $_POST['id'] ?? '';
    $email = $_POST['nome'] ?? '';

    if($nome == ''|| $id == ''){
        echo "error";
        header('location: http://localhost/paginas/error.php');

    }else{
     editar($id, $nome, $connection);

    }
}

if(isset($_POST['delete'])){

    $nome = $_POST['nome'] ?? '';
 
    if($nome == ''){
        header('location: http://localhost/paginas/error.php');

    }else{
       delete($nome, $connection);
       $nome ='';
       $inserir = '';

    }
}

if(isset($_POST['logar'])){

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($usuario == '' || $senha == ''){
        header('location: http://localhost/paginas/error.php');
        
    }else{

        logar($connection,$senha,$usuario);
    }
    

}

if(isset($_POST['sair'])){
    
    header('location: http://localhost/paginas/sair.php');

}

if(isset($_POST['enviarComen'])){

    $nome = $_POST['nome'] ?? '';
    $anexo = $_FILES['imagem'] ?? 1;
    $comentario = $_POST['comentario'] ?? '';

}