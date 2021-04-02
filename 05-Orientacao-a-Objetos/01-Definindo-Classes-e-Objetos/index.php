<?php
    require ('post.class.php');

    $a = new Post();
    $a->likes = 9;

    $b = new Post();
    $b->likes = 17;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definindo Classes e Objetos</title>
</head>
<body>
    <div>
        <p><?php echo $a->likes;?></p>
    </div>
    <div>
        <p><?php echo $b->likes;?></p>
    </div>
</body>
</html>