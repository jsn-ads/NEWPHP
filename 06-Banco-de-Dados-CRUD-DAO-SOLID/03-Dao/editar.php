<?php
    require ('config.php');
    require ('dao/UsuarioDaoMysql.class.php');

    $usuarioDao = new UsuarioDaoMysql($pdo);
    $usuario = false;
    
    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $usuario = $usuarioDao->findById($id);
    }

    if($usuario === false){
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <h1>EDITAR USUARIO</h1>

    <form action="editar_action.php" method="post">
        
        <input type="hidden" name="id" value="<?= $usuario->getId();?>">
        
        <label>
            Nome:<br/>
            <input type="text" name="nome" id="nome" value="<?= $usuario->getNome();?>">
        </label>
        <br><br>
        <label>
            E-Mail<br>
            <input type="email" name="email" id="email" value="<?= $usuario->getEmail();?>">
        </label>
        <br><br>
        <button>salvar</button>
    </form>
</body>
</html>