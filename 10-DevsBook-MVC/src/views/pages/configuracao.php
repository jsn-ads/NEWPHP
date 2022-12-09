<?= $render('/header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">
    
    <?= $render('/sidebar',['menuActive'=> 'configuracao']);?>
    
   
    <section class="feed mt-10">
    
        <hr/>

        <form action="" method="post">

            <div class="form-group col-8">
                <label for="my-input">Nome Completo : </label>
                <input id="nome" class="form-control" type="text" name="nome">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Data Nascimento : </label>
                <input id="data_nasc" class="form-control" type="text" name="data_nasc">
            </div>

            <div class="form-group col-8">
                <label for="my-input">E-mail : </label>
                <input id="email" class="form-control" type="text" name="email">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Cidade : </label>
                <input id="cidade" class="form-control" type="text" name="cidade">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Trabalho : </label>
                <input id="trabalho" class="form-control" type="text" name="trabalho">
            </div>

            <hr/>

            <div class="form-group col-8">
                <label for="my-input">Nova Senha : </label>
                <input id="senha" class="form-control" type="password" name="senha">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Confirma Nova Senha : </label>
                <input id="conf_senha" class="form-control" type="password" name="conf_senha">
            </div>

            <div style="display:flex; justify-content: flex-start;">
                <input class="button ml-3" type="submit" value="Salvar"/>
            </div>

        </form>

    </section>

</section>

<?= $render('/footer');?>