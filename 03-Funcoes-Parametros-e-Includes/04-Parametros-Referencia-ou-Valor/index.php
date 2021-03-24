<?php
     function somar($n1, $n2, &$referencia){
        $referencia = $n1 + $n2;
     }

     $n1 = 3;
     $n2 = 7;
     $n3 = 0;

     somar($n1, $n2, $n3);

     echo "Referencia : ".$n3;

     echo "<br><br>";

     $lista = [4,3,8];

    sort($lista);

    print_r($lista);

?>