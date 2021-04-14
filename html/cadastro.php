<div class="row">
  <div class="col-12 h1"><br>
    <h1 class="text-center">Usuarios Cadastrados</h1>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <table class="table ">
      <thead class="thead-dark text-center">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Imagem</th>
          <th scope="col">AÇÃO</th>
        </tr>
      </thead>
      <tbody class="tabela text-center">

        <?php
        $tabela = lerUsuarios($connection);
        echo $tabela;
        ?>

      </tbody>
    </table>
  </div>
</div>