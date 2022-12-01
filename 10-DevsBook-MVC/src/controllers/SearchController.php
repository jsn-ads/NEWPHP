<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\UserHelpers;

class SearchController extends Controller 
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

        $filtroPesquisa = filter_input(INPUT_GET,'s');

        if(empty($filtroPesquisa))
        {
            $this->redirect('/');
        }


        $this->render('search', 
            [
                'loggedUser'  => $this->loggedUser,
                'filtroPesquisa' => $filtroPesquisa
            ]
        );
    }

}