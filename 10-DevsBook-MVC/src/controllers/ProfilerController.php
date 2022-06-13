<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\LoginHelpers;
use \src\helpers\PostHelpers;

class ProfilerController extends Controller 
{

    private $loggedUser;

    public function __construct()
    {

        $this->loggedUser = LoginHelpers::checkLogin();

        if($this->loggedUser === false)
        {
            $this->redirect('/login');
        }
    }

    public function index() {

        $this->render('profile', [
                                    'loggedUser' => $this->loggedUser
                                 ]);
    }
}