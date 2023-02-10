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

    public function like($atts)
    {
        $id = $atts['id'];

        if(PostHelpers::isliked($id, $this->loggedUser->id))
        {
            PostHelpers::deleteLike($id, $this->loggedUser->id);
        }else{
            PostHelpers::addLike($id, $this->loggedUser->id);
        }
    }
    
}

