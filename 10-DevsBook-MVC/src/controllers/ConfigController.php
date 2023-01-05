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

    //Carrega tela de configuração
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

    //Edição de Usuario
    public function edit()
    {
        $id            = $this->loggedUser->id;
        $nome          = filter_input(INPUT_POST, 'nome');
        $birth_date    = filter_input(INPUT_POST, 'birth_date');
        $email         = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $city          = filter_input(INPUT_POST, 'city');
        $work          = filter_input(INPUT_POST, 'work');
        $password      = filter_input(INPUT_POST, 'password');
        $conf_password = filter_input(INPUT_POST, 'conf_password');
        $updateFields = array();

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

        if(!empty($password))
        {
            if($password != $conf_password)
            {
                $_SESSION['flash'] .= 'as senhas não conhecidem<br>';   
            }
        }

        if($this->loggedUser->email != $email)
        {
            if(UserHelpers::emailExists($email))
            {
                $_SESSION['flash'] .= $email.' ja esta sendo utilizado<br>';
            }   
        }

        // AVATAR

        if(isset($_FILES['avatar']) && !empty($_FILES['avatar']['tmp_name']))
        {
            $newAvatar = $_FILES['avatar'];

            if(in_array($newAvatar['type'],['image/jpeg','image/jpg', 'image/png']))
            {
                $avatarPath = $this->cutImage($newAvatar , 200, 200, 'media/avatars');
                $updateFields['avatar'] = $avatarPath;
            }else{
                $_SESSION['flash'] .= ' Não foi possivel atualizar Imagem do Avatar, verifique o formato<br>';
            }
        }
    
        // COVER

        if(isset($_FILES['cover']) && !empty($_FILES['cover']['tmp_name']))
        {
            $newCover = $_FILES['cover'];

            if(in_array($newCover['type'],['image/jpeg','image/jpg', 'image/png']))
            {
                $CoverPath = $this->cutImage($newCover , 850, 310, 'media/covers');
                $updateFields['cover'] = $CoverPath;
            }else{
                $_SESSION['flash'] .= ' Não foi possivel atualizar Imagem do Cover, verifique o formato<br>';
            }
        }
     
        if(!empty($_SESSION['flash']))
        {
            $this->redirect('/configuracao');
        }
        

        if(UserHelpers::editFields($id, $updateFields)){
            $_SESSION['flash_true'] .= 'Foto atualizada';   
        }

        if(UserHelpers::editUser($id, $email, $password, $nome, $birth_date, $city, $work)){
            $_SESSION['flash_true'] .= 'Dados atualizados';   
        }else{
            $_SESSION['flash'] .= 'Erro ao atualizar os dados';   
        }

        $this->redirect('/configuracao');

    }

    // Metodo para update de avatar e cover
    private function cutImage($file , $w, $h, $folder)
    {   
        list($widhPattern , $heightPattern) = getimagesize($file['tmp_name']);
        $ratio = $widhPattern / $heightPattern;

        $newWidth = $w;
        $newHeight = $newWidth / $ratio;

        if($newHeight < $h)
        {
            $newHeight = $h;
            $newWidth = $newHeight * $ratio;
        }

        // Controle de posicionamento
        $x = $w - $newWidth;
        $y = $h - $newHeight;
        $x = $x < 0 ? $x / 2 : $x;
        $y = $y < 0 ? $y / 2 : $y;

        $finalImage = imagecreatetruecolor(200 , 200);

        switch($file['type'])
        {
            case 'image/jpeg':
            case 'image/jpg':
                $image = imagecreatefromjpeg($file['tmp_name']);
                break;
            case 'image/png':
                $image = imagecreatefrompng($file['tmp_name']);
                break;
        }

        imagecopyresampled(
            $finalImage , $image,
            $x, $y, 0, 0,
            $newWidth, $newHeight, $widhPattern, $heightPattern
        );

        $fileName = md5(time().rand(0, 9999)).'.jpg';

        imagejpeg($finalImage, $folder.'/'.$fileName);

        return $fileName;
    }
}