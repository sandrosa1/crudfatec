<?php
require_once ('./services/sessao.php');
require_once ('./services/conexao.php');
require_once ('./services/lerbd.php');
require_once ('./html/header.php');
require_once ('html/nav.php');
$page = 'home';
?>


<div class="container">

    <div class="row">
        <div class="col-12 caixaDeMensagem"><img src="./public/home.png" class="img-fluid" alt="Imagem responsiva"></div>
    </div>

    <div class="row">
        <div class="col-12 caixaDeMensagem">
            <form action="http://localhost/services/services.php" method="post">

                <div class="form-group">
                    <h2 class="h2comentario">Deixe seu comentário</h2>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3" maxlength="399"></textarea>
                </div>
                <button type="submit" class="btn btn-success btnComentario" name="inserirComentario" >Enviar</button>
            </form>
        </div>
    </div>
    
    <div class="row">
        <?php $card = lerComentario($connection);
        echo $card; ?>
    </div>    
</div>

<?php require_once ('./html/footer.php') ?>