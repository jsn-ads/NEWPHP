<?php
    require ('matematica.class.php');
    require ('basico1.class.php');
    require ('basico2.class.php');

    $a = new Matematica(new Basico2);

    echo $a->somar(4,12);
?>