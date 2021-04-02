<?php
    class Post{
        public $likes;
        public $comentarios;
        public $autor;
        
        public function aumentarLike(){
            $this->likes++;
        }
    }
?>