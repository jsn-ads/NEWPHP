<?php
    class Usuario{

        private int $id;
        private string $nome;
        private string $email;

        public function getId(){
            return $this->id;
        }

        public function setId($i){
            $this->id = trim($i);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome = ucwords(strtolower(trim($n)));
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($e){
            $this->email = strtolower(trim($e));
        }
    }

    interface UsuarioDao{

        public function add(Usuario $u);

        public function findEmail($email);

        public function findAll();

        public function findById($id);

        public function update(Usuario $u);

        public function delete($id);
        
    }
?>