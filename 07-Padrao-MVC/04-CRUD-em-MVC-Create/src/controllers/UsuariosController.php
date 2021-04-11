<?php
    namespace src\controllers;
    
    use \core\Controller;
    use src\models\Usuario;

    class UsuariosController extends Controller{

        public function add(){
            $this->render('adicionarUsuario');
        }

        public function addAction(){
            
            $nome = filter_input(INPUT_POST,'nome');
            $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);

            if($nome && $email){

                $data = Usuario::select()->where('email', $email)->execute();

                if(count($data) === 0){

                    Usuario::insert([
                        'nome'=>$nome,
                        'email'=>$email
                    ])->execute();

                    $this->redirect('/');
                }
            }

            $this->redirect('/adicionarUsuario');
        }

        public function edit($args){

            $usuario = Usuario::select()->find($args['id']);

            $this->render('editarUsuario',[
                'usuario' => $usuario
            ]);

        }  
        
        public function editAction($args){

            $nome = filter_input(INPUT_POST,'nome');
            $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

            if($nome && $email){
                
                Usuario::update()
                ->set('nome',$nome)
                ->set('email',$email)
                ->where('id',$args['id'])
                ->execute();

                $this->redirect('/');

            }

            $this->redirect('/EditarUsuario/'.$args['id']);

        }

        public function del($args){
            Usuario::delete()
            ->where('id',$args['id'])
            ->execute();
            
            $this->redirect('/');
        }

    }
?>