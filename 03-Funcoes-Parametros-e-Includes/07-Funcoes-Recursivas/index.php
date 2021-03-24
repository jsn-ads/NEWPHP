<?php 
    function recursiva($n){

        $result = $n / 2;
        
        echo $result."</br>";

        if(round($result) > 0){
            recursiva($result);
        }

    }

    recursiva(101);
?>