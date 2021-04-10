<?php

    require ('vendor/autoload.php');

    use \classes\java\Imprimir as java;
    use \classes\php\Imprimir as php;

    $j = new java();
    $p = new php();

    $j->imprimirEmJava();
    echo "<br><br>";
    $p->imprimirEmPHP();

?>