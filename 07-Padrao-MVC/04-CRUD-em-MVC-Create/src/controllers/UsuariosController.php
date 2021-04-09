<?php
    namespace src\controllers;
    
    use \core\Controller;

    class UsuariosController extends Controller{

        public function add(){
            $this->render('adicionarUsuario');
        }

        public function addAction(){
            echo "Recebido";
        }

    }
?>