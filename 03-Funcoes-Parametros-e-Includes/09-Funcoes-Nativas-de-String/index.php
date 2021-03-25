<?php

    //retirar espassamento
    $nome = "      Neto     ";
    echo trim($nome)."<br/><br/>";

    //conta tamanho da string ou array

    $n = "Jose Alves";

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

    echo $x;
    
?>