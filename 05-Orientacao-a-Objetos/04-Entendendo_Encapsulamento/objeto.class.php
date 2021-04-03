<?php
    class Objeto{

        private int $qtd_like;
        private string $comentarios;
        private string $autor;

        public function __construct()
        {
            $this->qtd_like = 0;
            $this->comentarios = '';
            $this->autor = '';
        }

        public function setQtd_like($q)
        {
            $this->qtd_like = $q;
        }

        public function getQtd_like()
        {
            return $this->qtd_like;
        }

        public function setComentarios($c)
        {
            $this->comentarios = $c;
        }

        public function getComentarios()
        {
            return $this->comentarios;
        }

        public function setAutor($a)
        {
            $this->autor = $a;
        }

        public function getAutor(){
            return $this->autor;
        }

    }
?>