<?php
    $nome = "Neto";
    $sobreNome = "Alves";
    $idade = 30;

    $nomeCompleto = $nome.' '.$sobreNome;

    echo $nomeCompleto."<br><br>";

    $nomeCompleto2 = $nome;
    $nomeCompleto2.= $sobreNome;

    echo $nomeCompleto2."<br><br>";

    $frase = "$nome $sobreNome tem $idade anos";

    echo $frase."<br><br>";

    $x = '3';
    $y = 4;

    $w = $x + $y;

    echo $w;

?>