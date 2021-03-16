<?php
    $lista = [
        "Nome" => "Neto",
        "idade" => 31,
        "Atributos" => [
            "forca" => 90,
            "agilidade" => 80,
            "Magia" => 10 
        ],
        "vida" => 1000,
        "mana" => 50
    ];

    echo "Nome ".$lista["Nome"]."<br>";
    echo "Forca ".$lista["Atributos"]["forca"]."<br>";
    echo "Vida ".$lista["vida"];

?>