<?php
    $marcas = [
        "Sony",
        "Samsung",
        "LG",
        "Panasonic",
        "Philco",
        "TCL"
    ];

    echo "MARCAS TV FAMOSAS<br/><br/>";

    foreach($marcas as $valor => $marca){
        echo "Marca: ".($valor + 1)." - ".$marca."<br/>";
    }

?>