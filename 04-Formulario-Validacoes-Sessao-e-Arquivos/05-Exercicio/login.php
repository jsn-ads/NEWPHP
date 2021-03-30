<?php
    session_start();

    if(isset($_POST['nome']) && !empty($_POST['nome'])){

        $nome = addslashes($_POST['nome']);
        
        $_SESSION['nome'] = $nome;

        header('Location: index.php');
        
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>
            insera seu nome<br>
            <input type="text" name="nome">
        </label><br>

        <button>Salvar</button>
    </form>
</body>
</html>