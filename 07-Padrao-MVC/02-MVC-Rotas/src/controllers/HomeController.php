<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'JSNSYSTEMAS']);
    }

    public function fotos(){
        $t = new Test();
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}