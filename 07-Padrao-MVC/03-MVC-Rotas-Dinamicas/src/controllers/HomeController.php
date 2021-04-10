<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'JSNSYSTEMAS']);
    }

    public function fotos(){
        $this->render('fotos');
    }

    public function foto($params){
        echo "Acessando Foto: ".$params['id'];
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}