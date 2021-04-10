<?php

    require ('dao/UsuarioDaoMysql.class.php');
    require 'config.php';

    $lista = [];

    $u = new UsuarioDaoMysql($pdo);

    $lista = $u->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <button><a href="adicionar.php" style="text-decoration:none">ADICIONAR</a></button>
    <br><br>
    <table border="1" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>ACOES</th>
        </tr>
        <?php foreach($lista as $usuario):?>
        <tr>
            <td><?= $usuario->getId();?></td>
            <td><?= $usuario->getNome();?></td>
            <td><?= $usuario->getEmail();?></td>
            <td>
                <button><a href="editar.php?id=<?= $usuario->getId();?>" style="text-decoration: none;">Editar</a></button>
                <button><a href="excluir.php?id=<?= $usuario->getId();?>" style="text-decoration: none;" onclick="return confirm('Tem certeza de deseja excluir ?')">Excluir</a></button>
            </td>
        </tr>
        <?php endforeach;?>
        
    </table>

</body>
</html>