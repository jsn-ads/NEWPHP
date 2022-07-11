<?php
namespace src\controllers;

use \core\Controller;
use src\helpers\UserHelpers as HelpersUserHelpers;

class LoginController extends Controller 
{

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

            $token = HelpersUserHelpers::verifyLogin($email , $password);

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
        $flash = '';

        if(!empty($_SESSION['flash']))
        {
            $flash = $_SESSION['flash'];

            $_SESSION['flash'] = '';
        }

        $this->render('signup',['flash' => $flash]); 
    }

    public function signupAction(){

        $nome        = filter_input(INPUT_POST, 'nome');
        $email       = filter_input(INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL);
        $password    = filter_input(INPUT_POST, 'password');
        $birth_date  = filter_input(INPUT_POST, 'birth_date');

        if($nome && $email && $password && $birth_date)
        {
            $birth_date = explode('/', $birth_date);

            if(count($birth_date) != 3)
            {
                $_SESSION['flash']  = 'Data de Nascimento Invalida';
                $this->redirect('/cadastro');
            }

            $birthdate = $birth_date[2].'-'.$birth_date[1].'-'.$birth_date[0];

            if(strtotime($birthdate) === false)
            {
                $_SESSION['flash']  = 'Data de Nascimento Invalida';
                $this->redirect('/cadastro');
            }

            if(HelpersUserHelpers::emailExists($email) === false)
            {
                $token = HelpersUserHelpers::addUser($nome , $email , $password, $birthdate);
                $_SESSION['token'] = $token;
                $this->redirect('/');
            }
            else
            {
                $_SESSION['flash'] = 'E-MAIL ja cadastrado';
                $this->redirect('/cadastro');
            }
        }
        else
        {
            $this->redirect('/cadastro');
        }
    }

    public function logout()
    {
        $_SESSION['token'] = '';
        $this->redirect('/');
    }
}