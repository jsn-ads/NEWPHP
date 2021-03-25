<?php

    //retirar espassamento
    $nome = "      Neto     ";
    echo trim($nome)."<br/><br/>";

    //conta tamanho da string ou array

    $n = "jose alves";

    echo strlen($n)."<br><br>";

    //Caixa Baixa;

    echo strtolower($n)."<br><br>";
    
    //Caixa Alta

    echo strtoupper($n)."<br><br>";

    //troca de palavras

    $n = str_replace('Alves', 'Neto', $n);

    echo $n."<br><br>";

    //Pega caracteres , e se usar negativo pega do final para inicio

    $x = substr($n, 2, 9);

    echo $x."<br><br>";

    //retorna o numero da posicao

    echo strpos($n, "N")."<br><br>";

    //Deixa a primeira letra caixa alta

    echo ucfirst($n)."<br><br>";

    //Deixa a primeira letra de cada palavra em caixa alta

    echo ucwords($n)."<br><br>";

    //transforma string em array

    print_r(explode(' ',$n));


    echo "<br><br>";

    $numero = 12938.84;

    //formata numero

    echo number_format($numero, 2, ',','.')."<br><br>";


    
?>