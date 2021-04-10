<?php
include_once __DIR__ . "./../config.php";

function connection(){
    
    try {
        return $connection = new PDO("mysql:host=".db['host'].";port=".db['port'].";dbname=".db['dbname'],db['user'],db['pass']);
    } catch (Exception $error) {
         echo "Ocorreu o seguite erro: {$error->getMessage()}";
    }
    
}
