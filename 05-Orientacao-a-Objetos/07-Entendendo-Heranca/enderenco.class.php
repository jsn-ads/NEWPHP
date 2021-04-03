<?php
    class Endereco{

        private string $rua;
        private int $cep;
        private string $cidade;
        private string $estado;

        public function __construct()
        {
            $this->rua = "";
            $this->cep = 0;
            $this->cidade = "";
            $this->estado = "";
            
        }

        public function setRua($x){
            $this->rua = $x;
        }

        public function getRua(){
            return $this->rua;
        }

        public function setCep($x){
            $this->cep = $x;
        }

        public function getCep(){
            return $this->cep;
        }

        public function setCidade($x){
            $this->cidade = $x;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function setEstado($x){
            $this->estado = $x;
        }

        public function getEstado(){
            return $this->estado;
        }

    }
?>