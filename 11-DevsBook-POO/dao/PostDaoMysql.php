<?php
    require_once 'models/Post.php';
    require_once 'dao/UserRelationDaoMysql.php';

    class PostDaoMysql implements PostDAO
    {
        private $pdo;

        public function __construct(PDO $driver)
        {
            $this->pdo = $driver;
        }

        public function insert(Post $p)
        {

            $sql = $this->pdo->prepare("INSERT INTO posts SET
                id_user     = :id_user,
                type        = :type,
                created_at  = :created_at,
                body        = :body"
            );

            $sql->bindValue(':id_user',$p->id_user);
            $sql->bindValue(':type',$p->type);
            $sql->bindValue(':created_at',$p->created_at);
            $sql->bindValue(':body',$p->body);
            $sql->execute();

            return true;
        }

        public function getHomeFeed($id_user)
        {

            $array = [];

            //Listar o usuarios que eu sigo

            $urDao = new UserRelationDaoMysql($this->$pdo);
            $userList = $urDao->getRelationsFrom($id_user);

            //Pegar os posts ordenando pela data
            $sql = $this->pdo->query(
                "SELECT * FROM posts WHERE id_user IN (".implode(',',$userList).") ORDER BY created_at DESC"
            );

            if($sql->rowCount() > 0)
            {
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);

                //Transformar resultado em Objeto.

                $array = $this->_postListToObject($data, $id_user);
            }

            return $array;
        }

        private function _postListToObject($post_list, $id_user)
        {

        }
    }
?>