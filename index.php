<?php
$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
//Se existir a variavel amazena no $INIT
$INITE = strpos($REQUEST_URI, '?');

if($INITE){
    //Remove tudo que ha depois da interrogação
    $REQUEST_URI = substr($REQUEST_URI, 0 ,$INITE);
}
$REQUEST_URI_PASTA = substr($REQUEST_URI,1);

$URL = explode('/',$REQUEST_URI_PASTA);

$URL[0] = ($URL[0] != '' ? $URL[0] : 'home' );


if(file_exists('_mypages_/'. $URL[0].'.php') ){

    require('_mypages_/'. $URL[0].'.php');

}elseif(is_dir('_mypages_/'. $URL[0]) ){

    echo 'ok';

    if(isset($URL[1]) && file_exists('_mypages_/'. $URL[0].'/'.$URL[1].'.php') ){

        echo 'ok';
        require('_mypages_/'. $URL[0] .'/'. $URL[1] .'.php');

    }else{

        require('_mypages_/404.php');
    }
}elseif(is_dir('public/')){

    require('_mypages_/404.php');


}else{

    require('_mypages_/404.php');
}
