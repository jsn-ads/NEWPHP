<?php
    class Matematica{

        public function __construct(MatematicaBasica $b)
        {
            $this->basico = $b;
        }

        public function somar($x, $y){
            return $this->basico->somar($x,$y);
        }
    }
?>