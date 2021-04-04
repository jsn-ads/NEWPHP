<?php
    require ('circulo.class.php');
    require ('quadrado.class.php');

    $q = new Quadrado(4,7);
    $c = new Circulo(6);
    $objetos = [$q,$c];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Polimorfismo</title>
</head>
<body>
    <ul>
        <?php foreach($objetos as $objeto):?>
            <li><?php echo "Tipo : ".$objeto->getTipo()." Area: ".$objeto->getArea();?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>