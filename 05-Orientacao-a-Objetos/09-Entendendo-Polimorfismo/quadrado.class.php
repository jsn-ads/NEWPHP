<?php
    class Quadrado implements Forma{

        private string $tipo;
        private float $largura;
        private float $altura;

        public function __construct($l, $a)
        {
            $this->tipo = "Quadrado";
            $this->largura = $l;
            $this->altura = $a;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getArea(){
            return $this->largura * $this->altura;
        }

    }
?>