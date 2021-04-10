<?php

    require_once ('model/Usuario.class.php');

    class UsuarioDaoMysql implements UsuarioDao{

        private $pdo;

        public function __construct(PDO $drive)
        {
            $this->pdo = $drive;
        }

        public function add(Usuario $u){

            $sql = $this->pdo->prepare("INSERT INTO usuario SET nome = :nome, email = :email");
            $sql->bindValue(':nome', $u->getNome());
            $sql->bindValue(':email', $u->getEmail());
            $sql->execute();

            $u->setId($this->pdo->lastInsertId());

            return $u;

        }

        public function findAll(){

            $lista = [];

            $sql = $this->pdo->query("SELECT * FROM usuario");
            
            if($sql->rowCount() > 0){

                $sql = $sql->fetchAll();

                foreach($sql as $u){

                    $usuario = new Usuario();
                    $usuario->setId($u['id']);
                    $usuario->setNome($u['nome']);
                    $usuario->setEmail($u['email']);
                    $lista[] = $usuario;

                }

            }

            return $lista;

        }

        public function findEmail($email){
            
            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
            $sql->bindValue(':email',$email);
            $sql->execute();

            if($sql->rowCount() > 0){

                $dados = $sql->fetch();

                $usuario = new Usuario;
                $usuario->setId($dados['id']);
                $usuario->setNome($dados['nome']);
                $usuario->setEmail($dados['email']);

                return $usuario;

            }else{
                return false;
            }

        }

        public function findById($id){

            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE id = :id");
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){

                $dados = $sql->fetch();

                $usuario = new Usuario;
                $usuario->setId($dados['id']);
                $usuario->setNome($dados['nome']);
                $usuario->setEmail($dados['email']);

                return $usuario;

            }else{
                return false;
            }

        }

        public function update(Usuario $u){

            $sql = $this->pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id");
            $sql->bindValue(":id",$u->getId());
            $sql->bindValue(":nome",$u->getNome());
            $sql->bindValue(":email",$u->getEmail());
            $sql->execute();

        }

        public function delete($id){

            $sql = $this->pdo->prepare("DELETE FROM usuario WHERE id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();

        }

    }
?>