<?php

    //Modelo errado 

    interface Aves{
        public function setLocation($alt, $lgt);
        public function setAltitude($alt);
        public function render(); 
    }

    class Arara implements Aves{
        
        public function setLocation($alt, $lgt){}

        public function setAltitude($alt){}

        public function render(){}
    }

    class Pinguim implements Aves{
        
        public function setLocation($alt, $lgt){}

        public function setAltitude($alt){} // pinguins não voam

        public function render(){}
    }

    //Modelo Corredo

    interface AvesSul{
        public function setLocation($alt, $lgt);
        public function render(); 
    }

    interface AvesQueVoam extends AvesSul{
        public function setAltitude($alt);
    }

    class AraraSul implements AvesQueVoam{
        
        public function setLocation($alt, $lgt){}

        public function setAltitude($alt){}

        public function render(){}
    }

    class PinguimSul implements AvesSul{
        
        public function setLocation($alt, $lgt){}

        public function render(){}
    }
?>