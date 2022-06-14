<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\UserHelpers;
use \src\helpers\PostHelpers;

class HomeController extends Controller 
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

    public function index() {

        //pega numero da paginação
        $page = intval(filter_input(INPUT_GET, 'page'));

        //retorna postagem e paginação do PostHelpers
        $feed = PostHelpers::getHomeFeed(
                                            $this->loggedUser->id , 
                                            $page
                                        );

        $this->render('home', [
                                'loggedUser' => $this->loggedUser,
                                'feed'       => $feed
                              ]);

    }
}