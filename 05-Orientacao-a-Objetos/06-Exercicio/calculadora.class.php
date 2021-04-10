<?php
    class Calculadora{

        private float $n;

        public function __construct()
        {
            $this->n = 0;
        }

        public function add($x){
            $this->n +=$x;
        }

        public function sub($x){
            $this->n -=$x;
        }

        public function multiply($x){
            $this->n *=$x;
        }

        public function divide($x){
            $this->n /=$x;
        }

        public function total(){
            return $this->n;
        }

        public function clear(){
            return $this->n = 0;
        }

    }
?>