<?php
    require ('post.class.php');

    $a = new Post();
    $a->likes = 9;
    $a->aumentarLike();
    $a->aumentarLike();
    $b = new Post();
    $b->likes = 17;
    $b->aumentarLike();
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
        <p>POST 1 : 
            <?php echo $a->likes;?>
        </p>
    </div>
    <div>
        <p>POST 2 : 
            <?php echo $b->likes;?>
        </p>
    </div>

    <div>
        <p>POST 2 : 
            <?php echo phpversion();?>
        </p>
    </div>
</body>
</html>