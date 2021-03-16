<?php

    // Adiciona uma Array em outra Array , mas esse recurso so funciona no PHP 7.4 superior

    $lista = [
        "Neto",
        "Jose",
        "Cristina",
        "Natalia"
    ];

    $lista2 = [
        ...$lista,
        "Giselle",
        "Giovanna"
    ];

    print_r($lista2);

?>