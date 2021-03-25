<?php
    //Valor absoluto , numero positivo

    $n = 8.4;

    echo abs($n)."<br/><br/>";

    //valor de Pi

    echo pi()."<br/><br/>";

    //arredonda numero sempre para baixo

    echo floor($n)."<br/><br/>";

    //arredonda sempre para cima;

    echo ceil($n)."<br/><br/>";

    //arredonda para cima ou para baixo dependo do valor

    echo round($n)."<br/><br/>";

    //gerador de numeros aleatorios

    $aleatorio = rand(3, 9);

    echo $aleatorio."<br/><br/>";

    //pega maior numero do array

    $lista = [7,4,9,2];

    echo max($lista)."<br/><br/>";

    //pega menor numero da lista

    echo min($lista)."<br/><br/>";

?>