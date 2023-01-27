<?php

// teste de git 

namespace src\controllers;

use \core\Controller;
use src\helpers\UserHelpers;
use src\helpers\PostHelpers;

class AjaxController extends Controller
{

    public function __construct()
    {

        $this->loggedUser = UserHelpers::checkLogin();

        if($this->loggedUser === false)
        {
            header("Content-Type: application/json");
            echo json_encode(['error' => 'Usuário não logado']);
            exit;
        }
    }
    
}

