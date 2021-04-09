<?php
    interface DBconection{
        public function conection();
    }

    class Mysql implements DBconection{
        public function conection(){}
    }

    class Oracle implements DBconection{
        public function conection(){}
    }

    class Mongo implements DBconection{
        public function conection(){}
    }

    class UsuarioDao {
        
        private $db;

        public function __construct(DBconection $dbConection){
            $this->db = $dbConection;
        }
        
    }
?>