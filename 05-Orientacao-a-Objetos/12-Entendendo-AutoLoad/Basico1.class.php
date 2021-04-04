<?php

    require ('MatematicaBasica.interface.php');

    class Basico1 implements MatematicaBasica{

        public function somar($x, $y)
        {
            return $x + $y;
        }
    }
?>