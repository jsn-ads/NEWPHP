<?php
namespace src\controllers;

use \core\Controller;
use src\helpers\UserHelpers;
use src\helpers\PostHelpers;

class PostController extends Controller
{

    public function __construct()
    {

        $this->loggedUser = UserHelpers::checkLogin();

        if($this->loggedUser === false)
        {
            $this->redirect('/login');
        }
    }

    public function new ()
    {

        $body = filter_input(INPUT_POST, 'body');

        if(!empty($body))
        {
            PostHelpers::addPost($this->loggedUser->id, 'text', $body);
        }

        $this->redirect('/');

    }
}