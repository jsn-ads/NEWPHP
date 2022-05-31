<?php
namespace src\controllers;

use ClanCats\Hydrahon\Query\Sql\Func;
use \core\Controller;
use \helpes\LoginHelpers;
use src\helpers\LoginHelpers as HelpersLoginHelpers;

class LoginController extends Controller {

    public function signin()
    {
        $flash = '';

        if(!empty($_SESSION['flash']))
        {
            $flash = $_SESSION['flash'];

            $_SESSION['flash'] = '';
        }

        $this->render('signin',['flash' => $flash]);
    }

    public function signinAction()
    {
        
        $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if($email && $password)
        {

            $token = HelpersLoginHelpers::verifyLogin($email , $password);

            if($token)
            {
                $_SESSION['token'] = $token;
                $this->redirect('/');
            }else{
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem';

                $this->redirect('/login');
            }

        }else{

            $this->redirect('/login');
            
        }

    }

    public function signup()
    {
        $this->render('signup');
    }

    public function signupAction(){
        echo 'bem vindo';
    }
}