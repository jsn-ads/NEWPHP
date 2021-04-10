<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'JSNSYSTEMAS']);
    }
}