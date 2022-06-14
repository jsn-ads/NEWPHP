<?php

    /*
        classe responsavel por verificar usuario esta logado
    */

    namespace src\helpers;

    use src\models\User;
    use src\models\UserRelation;

    class UserHelpers {

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
                    $loggedUser->birth_date =   $sql['birth_date'];
                    $loggedUser->city       =   $sql['city'];
                    $loggedUser->work       =   $sql['work'];
                    $loggedUser->avatar     =   $sql['avatar'];
                    $loggedUser->token      =   $sql['token'];
                    
                    return $loggedUser;

                }

            }

            return false;
        }

        public static function verifyLogin($email, $passowrd)
        {

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

        public static function idExists($id)
        {
            $user = User::select()
                                ->where('id',$id)
                        ->one();
            
            return $user ? true : false;
        }

        public static function emailExists($email)
        {
            $user = User::select()->where('email',$email)->one();
            return $user ? true : false;
        }

        public static function getUser($id , $full = false)
        {   
            $dados = User::select()
                            ->where('id',$id)
                         ->one();
            
            if($dados)
            {
                $user               = new User();
                $user->id           = $dados['id'];
                $user->nome         = $dados['nome'];
                $user->birth_date   = $dados['birth_date'];
                $user->city         = $dados['city'];
                $user->work         = $dados['work'];
                $user->avatar       = $dados['avatar'];
                $user->cover        = $dados['cover'];

                if($full)
                {

                    $user->followers = [];
                    $user->following = [];
                    $user->photos = [];

                    //recuperando seguidores 
                    $followers = UserRelation::select()
                                                ->where('user_to' , $id)
                                             ->get();

                    foreach($followers as $f)
                    {
                        $userData = User::select()
                                            ->where('id', $f['user_from'])
                                        ->one();
                        $follower         = new User();
                        $follower->id     = $userData['id'];
                        $follower->nome   = $userData['nome'];
                        $follower->avatar = $userData['avatar'];

                        $user->followers[] = $follower;
                    }

                    //recuperando os usuarios que user segue 
                    $following = UserRelation::select()
                                                ->where('user_from' , $id)
                                             ->get();

                    foreach($following as $f)
                    {
                        $userData = User::select()
                                            ->where('id', $f['user_to'])
                                        ->one();
                        $follower         = new User();
                        $follower->id     = $userData['id'];
                        $follower->nome   = $userData['nome'];
                        $follower->avatar = $userData['avatar'];

                        $user->followers[] = $follower;
                    }

                }

                return $user;
            }

            return false;
        }

        public static function addUser($nome , $email, $passowrd, $birth_date)
        {
            $hash = password_hash($passowrd , PASSWORD_DEFAULT);
            $token = md5(time().rand(0,9999).md5(time()));

            User::insert([
                'email'      => $email,
                'password'   => $hash,
                'nome'       => $nome,
                'birth_date' => $birth_date,
                'token'      => $token
            ])->execute();

            return $token;
        }
    }
?>