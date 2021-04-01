<?php
    require ("imprimir.class.php");
    $dados = new Imprimir();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona texto em Arquivo</title>
</head>
<body>
    <form action="criar_arquivo.php" method="post">
        <input type="text" name="texto">
        <button>Adicionar</button>
        <button><a href="excluir.php">Exluir Lista</a></button>

        <ul>
            <?php foreach($dados->exibir() as $nome):?>
                <li><?php echo $nome;?></li>
            <?php endforeach;?>
        </ul>

    </form>
</body>
</html>