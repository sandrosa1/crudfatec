<?php
//require_once ('./../services/sesao.ph');

function sair(){
    session_start();
    session_unset();
    session_destroy();
    header('Location: http://localhost/index.php');
}