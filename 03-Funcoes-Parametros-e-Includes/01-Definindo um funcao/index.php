<?php  
    function sequencial(){
        for ($i=0; $i < 10; $i++) { 
            echo $i.'<br>';
        }
        echo '<hr/>';
    }

    for ($i=0; $i < 5; $i++) { 
        sequencial();
    }
?>