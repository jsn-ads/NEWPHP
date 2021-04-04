<?php

    require ('forma.php');

    class Circulo implements Forma{

        private string $tipo;
        private float $raio;

        public function __construct($r)
        {
            $this->tipo = "Circulo";
            $this->raio = $r;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getArea(){
            return pi() * ($this->raio * $this->raio);
        }

    }
?>