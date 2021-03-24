<?php
    $x = function(int $valor){
        return $valor * 0.1;
    };

    $imprimir = $x;

    echo $imprimir(12)."<br><br>";

    function somar($x , $y){
        return $x + $y;
    }

    echo "somar : ".somar(10, $imprimir(12));

?>