<?php

    namespace src\helpers;

    use src\models\Post;

    class PostHelpers 
    {
        public static function addPost($idUser, $type, $body)
        {

            if($idUser && $body)
            {
                Post::insert([
                    'id_user'   => $idUser,
                    'type'      => $type,
                    'create_at' => date('Y-m-d H:i:s'),
                    'body'      => $body
                ])->execute();

            }
        }
    }