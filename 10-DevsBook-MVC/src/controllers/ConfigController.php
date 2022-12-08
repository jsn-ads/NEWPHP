<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\UserHelpers;

class ConfigController extends Controller 
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

    public function index() 
    {

        $this->render('configuracao', [
                                'loggedUser' => $this->loggedUser
                              ]);

    }
}