
<?php
    //o principio da responsabilidade mostra que cada classe deve ter apenas uma responsabilidade e nao mais que isso

    //modelo errado
    
    class Usuarios{
        
        public function getNome(){}
        public function settNome(){}
        public function getPassword(){}
        public function setPassword(){}

        public function add(){}
        public function find(){}
        public function update(){}
        public function delete(){}

    }

    //modelo certo

    class Usuario{
        public function getNome(){}
        public function settNome(){}
        public function getPassword(){}
        public function setPassword(){}
    }

    class UsuarioDao{
        public function add(Usuario $u){}
        public function find(Usuario $u){}
        public function update(Usuario $u){}
        public function delete(Usuario $u){}
    }
?>