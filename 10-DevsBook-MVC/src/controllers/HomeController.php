<?php
namespace src\controllers;

use \core\Controller;
use src\helpers\LoginHelpers;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct()
    {

        $loggedUser = LoginHelpers::checkLogin();

        if($loggedUser === false)
        {
            $this->redirect('/login');
        }
    }

    public function index() {

        echo $this->loggedUser->nome;

        $this->render('home', ['loggedUser' => $this->loggedUser]);
    }
}