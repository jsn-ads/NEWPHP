<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\UserHelpers;
use \src\helpers\PostHelpers;

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
        $id = $this->loggedUser->id;

        if(!empty($attts['id']))
        {
            $id = $atts['id'];
        }

        $user = UserHelpers::getUser($id , true);

        if(empty($user))
        {
            return $this->redirect('/');
        }

        $this->render('profile', [
                                    'loggedUser' => $this->loggedUser,
                                    'user'       => $user
                                 ]);
    }
}