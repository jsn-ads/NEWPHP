<?php
    function somar($x, $y){
        $total = $x + $y;
        return $total;
    }

    $x = somar(3,4);
    $y = somar(3,6);
    $w = somar($x, $y);

    echo $w;
?>