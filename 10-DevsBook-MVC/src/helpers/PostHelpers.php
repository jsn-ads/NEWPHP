<?php

namespace src\helpers;

use \src\models\Post;
use \src\models\User;
use \src\models\UserRelation;

class PostHelpers 
{
    public static function addPost($idUser, $type, $body)
    {

        if($idUser && $body)
        {

            Post::insert([
                'id_user'       => $idUser,
                'type'          => $type,
                'created_at'    => date('Y-m-d H:i:s'),
                'body'          => $body
            ])->execute();

        }
    }

    public static function getHomeFeed($idUser, $page)
    {
        // pegar a lista de usuarios que eu sigo incluindo o prorpio

        $userList = UserRelation::select()->where('user_from',$idUser)->get();

        $users = [];

        foreach($userList as $item)
        {
            $users[] = $item['user_to'];
        }

        $users [] = $idUser;

        // retorna o post de todos os usuarios
        $perpage = 2; // quantidade de feed por pagina
        
        // retorna post de todos os usuarios por data em ordem da hora mais atual para antiga
        $postList = Post::select()
                            ->where('id_user','in',$users)
                            ->orderBy('created_at', 'desc')
                            ->page($page , $perpage)
                        ->get();

        // retorna quantidade total de usuarios
        $total    = Post::select()
                            ->where('id_user','in',$users)
                        ->count();

        $pagination = ceil($total / $perpage);

        $posts = [];

        foreach($postList as $item)
        {
            $post = new Post();
            $post->id           =   $item['id'];
            $post->type         =   $item['type'];
            $post->created_at   =   $item['created_at'];
            $post->body         =   $item['body'];
            $post->mine         =   false;

            // caso o usuario logado seja dono do post
            if($item['id_user'] == $idUser){
                $post->mine     =   true;
            }

            // pega os dados do usuario que fez o post
            $sql = User::select()->where('id', $item['id_user'])->one();
            $post->user         =   new User();
            $post->user->id     =   $sql['id'];
            $post->user->nome   =   $sql['nome'];
            $post->user->avatar =   $sql['avatar'];

            // like
            $post->likeCount    =   0;
            $post->liked        =   false;

            // comments
            $post->comments     =   [];

            // retun post
            $posts[] = $post;
        }

        return [
            'posts'      => $posts,
            'pagination' => $pagination,
            'page'       => $page       
        ];

    }

    public static function getPhotosFrom($idUser)
    {
        
        $photosData = Post::select()
                                 ->where('idUser', $idUser)
                                 ->where('type', 'photo')
                            ->get();

        $photos = [];

        foreach($photosData as $photo)
        {
            $post = new Post();
            $post->id         = $photo['id'];
            $post->type       = $photo['type'];
            $post->created_at = $photo['created_at'];
            $post->body       = $photo['body'];

            $photos[] = $post;

        }

        return $photos;
    }
}