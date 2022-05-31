<?php

    /*
        classe responsavel por verificar usuario esta logado
    */

    namespace src\helpers;

    use src\models\User;

    class LoginHelpers {

        // verifica se a sessao posseui algum token , caso tenha verifica se esse token pertece algum usuario registrado 
        public static function checkLogin()
        {

            if(!empty($_SESSION['token']))
            {
                
                $token = $_SESSION['token'];

                $sql = User::select()->where('token', $token)->one();

                if(count($sql) > 0)
                {

                    $loggedUser = new User();
                    $loggedUser->id         =   $sql['id'];
                    $loggedUser->email      =   $sql['email'];
                    $loggedUser->nome       =   $sql['nome'];
                    $loggedUser->birth_date =   $sql['brth_date'];
                    $loggedUser->city       =   $sql['city'];
                    $loggedUser->work       =   $sql['work'];
                    $loggedUser->avatar     =   $sql['avatar'];
                    $loggedUser->token      =   $sql['token'];

                    return $loggedUser;

                }

            }

            return false;
        }

        public static function verifyLogin($email, $passowrd){

            $user = User::select()->where('email',$email)->one();

            if($user)
            {
                if(password_verify($passowrd, $user['password']))
                {
                    $token = md5(time().rand(0,9999).time());

                    User::update()
                        ->set('token',$token)
                        ->where('email',$email)
                    ->execute();

                    return $token;
                }
            }
            else
            {
                return false;
            }

        }
    }
?>