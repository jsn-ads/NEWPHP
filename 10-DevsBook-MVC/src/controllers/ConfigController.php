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

        $flash = '';
        $flash_true = '';

        if(!empty($_SESSION['flash']))
        {
            $flash = $_SESSION['flash'];

            $_SESSION['flash'] = '';
        }

        if(!empty($_SESSION['flash_true']))
        {
            $flash_true = $_SESSION['flash_true'];

            $_SESSION['flash_true'] = '';
        }

        $this->render('configuracao',[
            'flash' => $flash,
            'flash_true' => $flash_true,
            'loggedUser' => $this->loggedUser
        ]);

    }

    public function add()
    {
        $id = $this->loggedUser->id;
        $nome =          filter_input(INPUT_POST, 'nome');
        $birth_date =    filter_input(INPUT_POST, 'birth_date');
        $email =         filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $city =          filter_input(INPUT_POST, 'city');
        $work =          filter_input(INPUT_POST, 'work');
        $password =      filter_input(INPUT_POST, 'password');
        $conf_password = filter_input(INPUT_POST, 'conf_password');

        if(empty($nome))
        {
            $_SESSION['flash'] .= 'Infome o nome<br>';   
        }

        if(empty($birth_date))
        {
            $_SESSION['flash'] .= 'Informe a data nascimento<br>';   
        }

        if(empty($email))
        {
            $_SESSION['flash'] .= 'Informe o E-Mail<br>';   
        }

        if(empty($city))
        {
            $_SESSION['flash'] .= 'Informe a cidade<br>';   
        }

        if(empty($work))
        {
            $_SESSION['flash'] .= 'Informe o local de trabalho<br>';   
        }

        if(empty($password))
        {
            $_SESSION['flash'] .= 'Informe a senha<br>';   
        }else if($password != $conf_password)
        {
            $_SESSION['flash'] .= 'as senhas não conhecidem<br>';   
        }

        if(!empty($_SESSION['flash']))
        {
            $this->redirect('/configuracao');
        }

        if(UserHelpers::editUser($id, $nome, $birth_date, $email, $city, $work, $password)){
            $_SESSION['flash_true'] .= 'Dados atualizados';   
        }else{
            $_SESSION['flash'] .= 'Erro ao atualizar os dados';   
        }

        $this->redirect('/configuracao');

    }
}