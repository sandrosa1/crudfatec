<?php
try {
    $connection = new PDO("mysql:host=localhost;port=3306;dbname=teste",'root','');
} catch (Exception $error) {
    echo "Ocorreu o seguite erro: {$error->getMessage()}";
    
}
