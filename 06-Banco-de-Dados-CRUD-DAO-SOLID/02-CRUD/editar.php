<?php
    require ('config.php');

    $info = array();
    $id = filter_input(INPUT_GET, 'id');

    if($id){

        $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();
        }else{
            header("Location:index.php");
            exit;
        }

    }else{
        header("Location:index.php");
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
        
        <input type="hidden" name="id" value="<?= $info['id']?>">
        
        <label>
            Nome:<br/>
            <input type="text" name="nome" id="nome" value="<?= $info['nome']?>">
        </label>
        <br><br>
        <label>
            E-Mail<br>
            <input type="email" name="email" id="email" value="<?= $info['email']?>">
        </label>
        <br><br>
        <button>salvar</button>
    </form>
</body>
</html>