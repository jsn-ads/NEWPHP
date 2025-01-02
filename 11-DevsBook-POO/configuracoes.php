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

    <?php if (!empty($_SESSION['flash'])): ?>
        <?= $_SESSION['flash']; ?>
        <?php $_SESSION['flash'] = '' ?>
    <?php endif; ?>

    <form method="POST" class="config-form" enctype="multipart/form-data" action="configuracoes_action.php">

        <label for="config.avatar">
            Novo Avatar:
        </label>
        <input id="config.avatar" type="file" name="avatar">
        <img class="mini-avatar" src="<?= $base; ?>/media/avatars/<?= $userInfo->avatar; ?>" alt="">

        <label for="config.couver">
            Nova Capa:
        </label>
        <input id="config.couver" type="file" name="cover">
        <img class="mini-cover" src="<?= $base; ?>/media/covers/<?= $userInfo->cover; ?>" alt="">

        <hr>

        <label for="config.name">
            Nome Completo:
        </label>
        <input id="config.name" type="text" name="name" value="<?= $userInfo->name; ?>">

        <label for="config.email">
            E-mail:
        </label>
        <input id="config.email" type="e-mail" name="email" value="<?= $userInfo->email; ?>">

        <label for="config.birthdate">
            Data de Aniversario:
        </label>
        <input id="config.birthdate" type="text" name="birthdate" value="<?= date('d/m/Y', strtotime($userInfo->birthdate)); ?>">

        <label for="config.city">
            Cidade:
        </label>
        <input id="config.city" type="text" name="city" value="<?= $userInfo->city; ?>">

        <label for="config.work">
            Trabalho:
        </label>
        <input id="config.work" type="text" name="work" value="<?= $userInfo->work; ?>">

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

<script src="https://unpkg.com/imask"></script>
<script>
    IMask(
        document.getElementById("config.birthdate"), {
            mask: '00/00/0000'
        }
    )
</script>

<?php
require 'partials/footer.php';
?>