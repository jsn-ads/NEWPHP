<?php

    require ('enderenco.class.php');

    class Pessoa extends Endereco{

        private string $nome;
        private string $idade;

        public function __construct()
        {
            $this->nome = "";
            $this->idade = "";
        }

        public function setNome($x){
            $this->nome = $x;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setIdade($x){
            $this->idade = $x;
        }

        public function getIdade(){
            return $this->idade;
        }
    }
?>