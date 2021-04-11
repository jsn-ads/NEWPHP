<?php

use src\models\Usuario;

$render('header'); ?>

<h1>CRUD EM MVC</h1>

<hr>

<a href="<?=$base;?>/AdicionarUsuario" style="text-decoration: none;">
    <img width="32px" src="<?=$base;?>/assets/img/add.png" title="adicionar">
</a><br><br>

<table border=1px; width="100%"">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td style="text-align:center">
                <a style="text-decoration: none;" href="<?=$base;?>/EditarUsuario/<?=$usuario['id'];?>">    
                    <img width="32px" src="<?=$base;?>/assets/img/edit.png" title="editar">
                </a>
                <a style="text-decoration: none;" href="<?=$base;?>/ExcluirUsuario/<?=$usuario['id'];?>" onclick="return confirm ('Tem certeza que deseja excluir esse Usuario ?')">
                    <img width="32px" src="<?=$base;?>/assets/img/del.png" title="excluir">
                </a>
        </tr>
    <?php endforeach?>

</table>

<?php $render('footer')?>