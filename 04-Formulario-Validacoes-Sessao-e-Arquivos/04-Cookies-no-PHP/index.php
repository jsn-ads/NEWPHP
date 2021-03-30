<?php
    require ('header.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessao</title>
</head>
<body>
    <?php
        if($_SESSION['aviso']){
            echo $_SESSION['aviso'];
            $_SESSION['aviso'] = '';
        }
    ?>
    <form action="receber.php" method="post">
        <label>
            Nome: <br>
            <input type="text" name="nome">
        </label>
        <br><br>

        <label>
            E-mail: <br>
            <input type="email" name="email">
        </label>
        <br><br>

        <label>
            Idade: <br>
            <input type="text" name="idade">
        </label>
        <br><br>
        <button>Enviar</button>
        <button><a href="apagar.php">Limpar Cookie</a></button>
    </form>
</body>
</html>