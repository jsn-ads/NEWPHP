<?php $render('header') ?>

    <h2>Adicionar Usuario</h2>

    <form action="<?=$base;?>/AdicionarUsuario" method="POST">
        <label>
            Nome: <br>
            <input type="text" name="nome" id="nome">
        </label><br><br>
        <label>
            Email: <br>
            <input type="text" name="email" id="email">
        </label><br><br>
        <button>Adicionar</button>
    </form>

<?php $render('footer') ?>