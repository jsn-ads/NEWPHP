<?php
namespace src\controllers;

use \core\Controller;
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
        $id = $this->loggedUser->id;

        if(!empty($attts['id']))
        {
            $id = $atts['id'];
        }

        $user = UserHelpers::getUser($id , true);
        $user->ageYears = UserHelpers::ageYears($user->birth_date);

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