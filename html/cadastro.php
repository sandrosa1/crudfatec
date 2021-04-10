<div class="container">
    <div class="row">
        <div class="col-12 h1"><br>
            <h1 class="text-center">Cadastro de Usuários</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="post" action="./../services/services.php" enctype="multipart/form-data" >

                <div class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="nome" placeholder="Input nome">
                    <label for="formGroupExampleInput2">Senha</label>
                    <input type="password" class="form-control logarIndex" id="inputPassword2" name="senha" placeholder="Senha">
                </div>
                    
        
                   
       
                <div class="form-group">
                    <label for="exampleFormControlFile1">Anexar foto .jpg ou .png</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem" accept='image/*'>
                </div>

                    </div>
                    <button type="submit" class="btn btn-success " name="action">Salvar</button>
                    <button type="submit" class="btn btn-danger" name="delete">Deletar</button>
            
                </div>
            </form>
        </div>
    </div>
</div>