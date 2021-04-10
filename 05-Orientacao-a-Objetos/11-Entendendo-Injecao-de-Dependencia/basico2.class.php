<?php

    class Basico2 implements MatematicaBasica{

        public function somar($x, $y)
        {
            for ($i=0; $i < $x; $i++) { 
                $y++;
            }

            return $y;
        }
    }
?>