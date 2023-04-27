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

    public function comment()
    {
        $array = ['error' => ''];

        $id = filter_input(INPUT_POST, 'id');
        $txt = filter_input(INPUT_POST, 'txt');

        if($id && $txt)
        {
            PostHelpers::addComment($id, $txt, $this->loggedUser->id);

            $array['link'] = '/perfil/'.$this->loggedUser->id;
            $array['avatar'] = '/media/avatars/'.$this->loggedUser->avatar;
            $array['nome'] = $this->loggedUser->nome;
            $array['body'] = $txt;
        }

        header("Content-Type: application/json");
        echo json_encode($array);
        exit;
    }

    public function upload()
    {
        $array = ['error' => ''];

        if(isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name']))
        {
            $photo = $_FILES['photo'];

            //padrao
            $standardWidth = 800;
            $standardHeight = 800;

            if(in_array($photo['type'],['image/png','image/jpg','image/jpeg']))
            {

                //configuração de tamanho

                list($origWidth,$origiHeight) = getimagesize($photo['tmp_name']);
                $origRadio = $origWidth / $origiHeight;

                $newWidth = $standardWidth;
                $newHeight = $standardHeight;
                $standardRadio = $standardWidth / $standardHeight;

                if($standardRadio > $origRadio)
                {
                    $newWidth = $newHeight * $origRadio;
                }
                else
                {
                    $newHeight = $newWidth / $origRadio;
                }

                //cria o modelo

                $standardImage = imagecreatetruecolor($newWidth, $newHeight);
                switch($photo['type'])
                {
                    case 'image/png':
                        $origiImage = imagecreatefrompng($photo['tmp_name']);
                        break;
                    case 'image/jpg':
                    case 'image/jpeg':
                        $origiImage = imagecreatefromjpeg($photo['tmp_name']);
                        break;
                }

                //copia da imagem

                imagecopyresampled(
                    $standardImage, $origiImage,
                    0,0,0,0,
                    $newWidth, $newHeight, $origWidth, $origiHeight
                );

                //salvar 

                $photoName = md5(time().rand(0,9999)).'.jpg';
                imagejpeg($standardImage,'media/uploads/'.$photoName);

                PostHelpers::addPost($this->loggedUser->id, 'photo', $photoName);

            }

        }else
        {
            $array['error'] = 'Nenhuma imagem enviada';
        }

        header("Content-Type: application/json");
        echo json_encode($array);
        exit;
    }
    
}

