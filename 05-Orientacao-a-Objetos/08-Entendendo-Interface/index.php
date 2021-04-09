<?php
    require ("mysql.class.php");
    require ("oracle.class.php");

    $a = new MysqlDB();
    $b = new OracleDB();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Interfase</title>
</head>
<body>
    <h1><?php echo $a->listar();?></h1>
    <h1><?php echo $b->listar();?></h1>
</body>
</html>