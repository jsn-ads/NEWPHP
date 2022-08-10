<?php
namespace src\controllers;

use \core\Controller;
use src\helpers\PostHelpers;
use \src\helpers\UserHelpers;

class ProfileController extends Controller 
{

    private $loggedUser;

    public function __construct()
    {

        $this->loggedUser = UserHelpers::checkLogin();

        if($this->loggedUser === false)
        {
            $this->redirect('/login');
        }
    }

    public function index($atts = []) 
    {

        $page = intval(filter_input(INPUT_GET,'page'));

        // detectando o usuario acessado
        $id = $this->loggedUser->id;

        if(!empty($atts['id']))
        {
            $id = $atts['id'];
        }

        // pegando informações do usuario
        $user = UserHelpers::getUser($id , true);

        if(empty($user))
        {
            return $this->redirect('/');
        }
        
        // pegando a idade do usuario
        $user->ageYears = UserHelpers::ageYears($user->birth_date);

        // peegando o feed do usuario
        $feed = PostHelpers::getUserFeed($id, $page, $this->loggedUser->id);

        // verifica se eu estou seguindo o usuario
        $isFollowing = '';

        if($user->id != $this->loggedUser->id)
        {
            $isFollowing = UserHelpers::isFollowing($this->loggedUser->id , $user->id);
        }
        

        $this->render('profile', 
            [
                'loggedUser'  => $this->loggedUser,
                'user'        => $user,
                'feed'        => $feed,
                'isFollowing' => $isFollowing
            ]
        );
    }

    public function follow($atts)
    {

        $id = intval($atts['id']);
    
        if(UserHelpers::idExists($id))
        {
            if(UserHelpers::isFollowing($this->loggedUser->id, $id))
            {
                UserHelpers::unfollow($this->loggedUser->id, $id);
            }
            else
            {
                UserHelpers::follow($this->loggedUser->id, $id);
            }
        }

        return $this->redirect('/perfil/'.$id);
    }

    public function friends($atts = [])
    {
  
        $id = $this->loggedUser->id;

        // detectando o usuario acessado
        if($atts)
        {
            $id = $atts['id'];
        }

        // pegando informações do usuario
        $user = UserHelpers::getUser($id , true);

        // pegando a idade do usuario
        $user->ageYears = UserHelpers::ageYears($user->birth_date);

        // verifica se eu estou seguindo o usuario
        $isFollowing = '';

        if($user->id != $this->loggedUser->id)
        {
            $isFollowing = UserHelpers::isFollowing($this->loggedUser->id , $user->id);
        }

        $this->render('profile_friends', 
            [
                'loggedUser'  => $this->loggedUser,
                'user'        => $user,
                'isFollowing' => $isFollowing
            ]
        );


    }
}