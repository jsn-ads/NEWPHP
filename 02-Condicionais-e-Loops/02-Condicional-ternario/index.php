<?php

    //(condicao) ? resultado positivo : resultado negativo

    $idade = 18;

    $resultado = ($idade < 18) ? true : false;

    if($resultado){
        echo "Menor de idade";
    }else{
        echo "Maior de idade";
    }

    echo "<br/><br/>";

    $resultado2 = ($idade < 18) ? "Nao entra" : "pode entrar";

    echo $resultado2;
?>