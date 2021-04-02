<?php
    class Post{
        public int $likes;
        public string $comentarios;
        public string $autor;
        
        public function aumentarLike(){
            $this->likes++;
        }
    }
?>