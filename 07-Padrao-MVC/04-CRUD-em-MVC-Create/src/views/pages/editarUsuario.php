<?php $render('header') ?>

    <h2>Editar Usuario</h2>

    <form action="<?=$base;?>/EditarUsuario/<?=$usuario['id'];?>" method="POST">
        <label>
            Nome: <br>
            <input type="text" name="nome" id="nome" value="<?=$usuario['nome'];?>">
        </label><br><br>
        <label>
            Email: <br>
            <input type="text" name="email" id="email" value="<?=$usuario['email'];?>">
        </label><br><br>
        <button>Salvar</button>
    </form>

<?php $render('footer') ?>