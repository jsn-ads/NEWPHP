<?php

use java\Imprimir;

require ('Autoload.php');

    $j = new \java\Imprimir();
    $p = new \php\Imprimir();

    $j->imprimirEmJava();
    echo "<br><br>";
    $p->imprimirEmPHP();

?>