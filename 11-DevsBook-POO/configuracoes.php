<?php
    require_once 'config.php';
    require_once 'models/Auth.php';
    require_once 'dao/UserDaoMysql.php';

    $auth = new Auth($pdo, $base);
    $userInfo = $auth->checkToken();
    $activeMenu = 'configuracoes';

    require 'partials/header.php';
    require 'partials/menu.php';
?>

<section class="feed mt-10">

    
    <h1>Configurações</h1>

    <form method="POST" class="config-form" enctype="multipart/form-data" action="configuracoes_action.php">

        <label for="config.avatar">
            Novo Avatar:
        </label>
        <input id="config.avatar" type="file" name="avatar">

        <label for="config.couver">
            Nova Capa:
        </label>
        <input id="config.couver"type="file" name="cover">

        <hr>

        <label for="config.name">
            Nome Completo:
        </label>
        <input id="config.name" type="text" name="name">

        <label for="config.email">
            E-mail:
        </label>
        <input id="config.email" type="e-mail" name="email">

        <label for="config.birthdate">
            Data de Aniversario:
        </label>
        <input id="config.birthdate" type="text" name="birthdate">

        <label for="config.city">
            Cidade:
        </label>
        <input id="config.city" type="text" name="city">

        <label for="config.work">
            Trabalho:
        </label>
        <input id="config.work" type="text" name="work">

        <label for="config.password">
            Nova Senha:
        </label>
        <input id="config.password" type="password" name="password">

        <label for="config.password_confirm">
            Confirma Nova Senha:
        </label>
        <input id="config.password_confirm" type="password" name="password_confirm">

        <button class="button">Salvar</button>
    
    </form>

 
</section>


<?php
    require 'partials/footer.php';
?>