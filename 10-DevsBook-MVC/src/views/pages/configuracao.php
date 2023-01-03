<?= $render('/header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">
    
    <?= $render('/sidebar',['menuActive'=> 'configuracao']);?>
    
   
    <section class="feed mt-10">

        <form action="<?=$base;?>/configuracao" method="post">
            
            <?php if(!empty($flash)): ?>
                <div class="form-group col-8">
                    <div class="flash">
                        <?php print_r($flash); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!empty($flash_true)): ?>
                <div class="form-group col-8">
                    <div class="flash_true">
                        <?php print_r($flash_true); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group col-8">
                Novo Avatar:<br/>
                <input type="file" name="avatar" /><br/>
            </div>

            <div class="form-group col-8">
                Novo Cover:<br/>
                <input type="file" name="cover" /><br/>
            </div>

            <hr/>

            <div class="form-group col-8">
                <label for="my-input">Nome Completo : </label>
                <input id="nome" class="form-control" type="text" name="nome" value="<?= $loggedUser->nome;?>">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Data Nascimento : </label>
                <input id="birth_date" class="form-control" type="date" name="birth_date" value="<?= $loggedUser->birth_date;?>">
            </div>

            <div class="form-group col-8">
                <label for="my-input">E-mail : </label>
                <input id="email" class="form-control" type="email" name="email" value="<?= $loggedUser->email;?>">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Cidade : </label>
                <input id="city" class="form-control" type="text" name="city" value="<?= $loggedUser->city;?>">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Trabalho : </label>
                <input id="work" class="form-control" type="text" name="work" value="<?= $loggedUser->work;?>">
            </div>

            <hr/>

            <div class="form-group col-8">
                <label for="my-input">Nova Senha : </label>
                <input id="password" class="form-control" type="password" name="password">
            </div>

            <div class="form-group col-8">
                <label for="my-input">Confirma Nova Senha : </label>
                <input id="conf_password" class="form-control" type="password" name="conf_password">
            </div>

            <div style="display:flex; justify-content: flex-start;">
                <input class="button ml-3" type="submit" value="Salvar"/>
            </div>

        </form>

    </section>

</section>

<?= $render('/footer');?>