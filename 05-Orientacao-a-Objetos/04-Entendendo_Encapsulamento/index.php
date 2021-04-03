<?php
    require ('objeto.class.php');

    $a1 = new Objeto();
    $a1->setAutor("Jose Neto");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Encapsulamento</title>
</head>
<body>
    <p>
        <?php echo $a1->getAutor();?>
    </p>
    <p>
        <?php echo $a1->getComentarios();?>
    </p>
</body>
</html>