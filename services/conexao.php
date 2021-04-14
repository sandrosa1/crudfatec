<?php
try {
    $connection = new PDO("mysql:host=localhost;port=3306;dbname=teste",'root','Jpthlusa15*m');
} catch (Exception $error) {
    echo "Ocorreu o seguite erro: {$error->getMessage()}";
    
}
