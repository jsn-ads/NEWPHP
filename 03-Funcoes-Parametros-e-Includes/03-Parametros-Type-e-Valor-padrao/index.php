<?php
    function somar(int $x, int $y = 0){
        $total = $x + $y;
        return $total;
    }

    
    echo somar(5);

    echo "<br/>";

    echo somar(5,6);

?>