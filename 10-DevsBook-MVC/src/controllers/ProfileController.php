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

        $this->render('profile', [
                                    'loggedUser' => $this->loggedUser,
                                    'user'       => $user,
                                    'feed'       => $feed
                                 ]);
    }
}