<?php
    class Post{
        public int $likes = 0;
        public string $comentarios;
        public string $autor;

        public function __construct($qtd){
            $this->likes = $qtd; 
        }
        
        public function aumentarLike(){
            $this->likes++;
        }
    }
?>