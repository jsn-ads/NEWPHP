<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\LoginHelpers;
use \src\helpers\PostHelpers;

class ProfileController extends Controller 
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

    public function index($atts = []) 
    {
        $id = $this->loggedUser->id;

        if(!empty($attts['id']))
        {
            $id = $atts['id'];
        }

        $this->render('profile', [
                                    'loggedUser' => $this->loggedUser
                                 ]);
    }
}