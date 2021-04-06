<?php
    require 'config.php';

    $lista = array();

    $sql = $pdo->query("SELECT * FROM usuario");

    ($sql->rowCount() > 0)? $lista = $sql->fetchAll(PDO::FETCH_ASSOC):""; 

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
            <th><?= $usuario['id'];?></th>
            <th><?= $usuario['nome'];?></th>
            <th><?= $usuario['email'];?></th>
            <th>
                <button><a href="editar.php?id=<?= $usuario['id'];?>" style="text-decoration: none;">Editar</a></button>
                <button><a href="excluir.php?id=<?= $usuario['id']?>" style="text-decoration: none;">Excluir</a></button>
            </th>
        </tr>
        <?php endforeach;?>
        
    </table>

</body>
</html>