<?php
require_once ('./../services/sessao.php');
require_once ('./../services/conexao.php');
require_once ('./../services/delete.php');
require_once ('./../services/lerbd.php');
require_once ('./../html/header.php');
$page = '';
require_once ('./../html/nav.php'); ?>

  <div class="container">
    
    <?php 

      if($logado){
        include_once ('./../html/cadastro.php');

      }else{
        echo "<h2>Acesso Restrito!!!</h2>";
      }

    ?>
 
  </div>


<?php require_once ('./../html/footer.php');?>